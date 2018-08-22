<?
namespace App\Utils;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

class DataFilter{
    public $data = null;
    public $format = null;

    public function __construct($data, $format)
    {
        $this->data = $data;
        $this->format = $format;
    }

    public function convert(){
        $encoders = array(new XmlEncoder(), new JsonEncoder(), new CsvEncoder());
        $normalizers = array(new ObjectNormalizer());

        $serializer = new Serializer($normalizers, $encoders);
        $formattedContent = $serializer->serialize($this->data, $this->format);
        return $formattedContent;
    }
}