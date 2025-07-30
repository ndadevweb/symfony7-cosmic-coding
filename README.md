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



