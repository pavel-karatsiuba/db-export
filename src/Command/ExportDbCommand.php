<?
namespace App\Command;

use App\Utils\Exporter;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use App\Entity\Users;
use App\Utils\DataFilter;

class ExportDbCommand extends ContainerAwareCommand
{

    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:db-export')

            // the short description shown while running "php bin/console list"
            ->setDescription('Export database.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to export database to different formates')
            ->addArgument('format', InputArgument::OPTIONAL, 'Output format. Can be one of the next formats: ' . implode(', ', Exporter::availableFormats), Exporter::defaultFormat)
            ->addArgument('output-file-name', InputArgument::OPTIONAL, 'Output filename.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $format = $input->getArgument('format');
        $outputFileName = $input->getArgument('output-file-name');
        $output->writeln('Export db to file with selected format.');
        $users = $this->getContainer()->get('doctrine')
            ->getRepository(Users::class)
            ->findall();
        $outputFileName = $outputFileName?$outputFileName:'users';
        $exporter = new Exporter($users, $format, $outputFileName);
        $exporter->export();
        $output->writeln('Format: ' . $exporter->getFormat());
        $output->writeln('Output file: ' . $exporter->getOutputFileName());

 //       return new Response('Check out this great product: '.$product->getName());
    }
}
