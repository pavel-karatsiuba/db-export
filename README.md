# db-export
Export DB user data to csv and xml using symfony and cli
Requirements:
- php7.2-cli
- php7.2-xml

Setup project:
1) make project installation:

    `composer install`
1) edit .env file with your mysql connection row
1) create DB using next command:

    `php bin/console doctrine:database:create`
1) execute migrations to create tables and add data to database:

    `php bin/console doctrine:migrations:migrate`

1) Use console command to export db data to file:

    `php bin/console app:db-export csv`

