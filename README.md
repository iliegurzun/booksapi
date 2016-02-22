Book search API
---------------
In order to install the app, you need to clone the repository from here: git@github.com:iliegurzun/booksapi.git

Download the composer.phar from here https://getcomposer.org/download/ and run `php composer.phar install`.

After that, add your mySQL credentials into `app/config/parameters.yml` file and run `php app/console doctrine:database:create` and `php app/console doctrine:schema:update --force`.

To have dummy data into the database, run `php app/console doctrine:migrations:execute 20160221200721`.

You don't need to create a virtual host in order to make the application run. Simply run the following command into your terminal `php app/console server:run 0.0.0.0:8080 >/dev/null &` and you can access it on your local machine by accessing `localhost:8080/app_dev.php`.

Example of API call:
![API CALL EXAMPLE](http://i.imgur.com/cwOLwBP.png)
You can search by the following fields: `title`, `author`, `rating`. In order to find all the books released into a date range, you need to pass the following parameters: `start_date` and `end_date`.

Example:
![API CALL EXAMPLE](http://i.imgur.com/W5ZSUIK.png)

In order to run the test suite, you need to setup your credentials for mysql into `app/config/parameters_test.yml` and run the following command: `php phpunit.phar -c app/`
