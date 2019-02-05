<h1 align="center">
    solutionDrive Coding Standard
</h1>

:1st_place_medal: solutionDrive coding standard configuration.

Installation & usage
--------------------

1. Install this package:

    ```bash
    $ composer require --dev solutiondrive/coding-standard
    ```
    
2. Include a configuration file in your `easy-coding-standard.yml`:

    ```yaml
    imports:
      - { resource: 'vendor/solutiondrive/coding-standard/easy-coding-standard.yml' } 
    ```

Phar usage
----------

To create the phar, you need to install ```kherge/box``` globally:
(The global composer bin path needs to be available in $PATH)

    composer global require kherge/box

Install the dependencies

    composer install --optimize-autoloader -n

Create the phar file

    box build -c box.json
    
Perhaps it is necessary to allow php to create a phar

    php -d phar.readonly=0 ~/.composer/vendor/bin/box build -c box.json

The newly created phar file can be used just like the ```ecs``` binary is used:

    ecs-standalone.phar --help
