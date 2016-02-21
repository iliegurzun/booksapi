Book search API
---------------
In order to install the app, you need to clone the repository from here: git@github.com:iliegurzun/booksapi.git
Download the composer.phar from here https://getcomposer.org/download/ and run `php composer.phar install`
After that, add your mySQL credentials into `app/config/parameters.yml` file and run `php app/console doctrine:database:create` and `php app/console doctrine:schema:update --force`.
To have dummy data into the database, run `php app/console doctrine:migrations:execute 20160221200721`
You don't need to create a virtual host in order to make the application run. Simply run the following command into your terminal `php app/console server:run 0.0.0.0:8080 >/dev/null &` and you can access it on your local machine by accessing `localhost:8080/app_dev.php`

Example of API call:
![API CALL EXAMPLE](https://lh3.googleusercontent.com/IOlsr0w55jkI9lapD2LcZZ-KWOLcu0z3QB8FcLnSzRJGY8tuGSM45B91cfSIz0nYRDj4qkr00i5064M_epzBKwZ8jPWE3vZV7S6Qe1ZSUyOS4jkam29NepqV9EeCQfZDyoN_dbQe3_gTpiDDpdY9vyi9Q8eUs3Fh4Co4a2_RPCAufnjphl6ZL2uMAGz4wc7dWrj5OXwWlMcFyDWYcoxtkRBkY_Gs5v4XMai3BnYeN15x9qZkFtrbPlDEjL2iWtBNqccXkVT3dzhjOiKsKpAjzCCFguWJHRetdEqpq054aLHq-HHoaPE8fpuIkL-znbQbXInXR_4t6z4QFO3ViyqJyOGCZLd47u8GwnMFSP1JZlbSuSVUNGWqr3Y6BM8-Y5fcs28iKKi3K3H-TZSQTwrHDweuMRYTDyJHJFQtPFC7tTKPe4NNpCbvmhjx36Ojx5kYD-YdthqZQkbbAiOKBKhR7Zzxq0JVRmPFuRP8wG_uTQgmSVdkQ6tOQkbpxJ4XYIAd8-4nGhttKFwXOPsurGOgfbLayy1qoQPIy0R2ijtE6KVbrS39OL3NQ9IxHQaQ4ijbOaFY=w1032-h531-no)

In order to run the test suite, you need to setup your credentials for mysql into `app/config/parameters_test.yml` and run the following command: `php phpunit.phar -c app/`
