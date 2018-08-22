# db-export
Export DB user data to csv and xml using symfony and cli

Setup project:
1) edit .env file with your mysql connection row
2) create DB using next command:

    `php bin/console doctrine:database:create`
3) execute migrations to create tables and add data to database:

    `php bin/console doctrine:migrations:migrate`

4) Use console command to export db data to file:

    `php bin/console app:db-export csv`

