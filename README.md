# Using PHP-CS-Fixer

composer require cs-fixer-shim

To see the commands list
./vendor/bin/php-cs-fixer

To fix all files of the project
./vendor/bin/php-cs-fixer fix


# Watch the profiler on REST API
just open /_profiler/ url in the web browser


# Use Tailwind CSS

To begining install these components


composer require symfony/asset-mapper

After that, a new folder name assets will be created and also a config/packages/asset_mapper.yaml file

To display assets use this Symfony command

php bin/console debug:asset


To use asset function in the Twig template install this component

composer require symfony/asset


And now, install this component to initialize Tailwind files

composer require symfonycasts/tailwind-bundle

php bin/console tailwind:init


Use this command each time to update the Twig template when using Tailwind classes

php bin/console tailwind:build -w

Use Ctrl + C to stop the watcher


# Stimulus

composer require symfony/stimulus-bundle



# Turbo

composer require symfony/ux-turbo



# KnpTimeBundle

This bundle allows to handle dates

composer require knplabs/knp-time-bundle


Select a service to display its information

bin/console debug:container time

> choose Knp\Bundle\TimeBundle\DateTimeFormatter

then

php bin/console debug:autowiring time

> To see the functions list and filters list

php bin/console debug:twig


Check if the application has a HTTP client

bin/console debug:autowiring http



Install the HTTP Client Component

composer require symfony/http-client



# Cache

> See the cache pools

bin/console cache:pool:list

> Clear cache

bin/console cache:pool:clear cache.app



# Database

> To see if the database environment variable is detected

symfony var:export --multiline

> To test database connection

php bin/console dbal:run-sql "SELECT 1"

> To create a database

symfony console doctrine:database:create



## Production

> Compile and generate a map of assets

php bin/console asset-map:compile

> Clear cache

php bin/console cache:clear --env=prod

