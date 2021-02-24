https://developer.okta.com/blog/2018/08/14/php-crud-app-symfony-angular

1.  composer create-project symfony/skeleton bad-puns-tracker-server

2.  cd bad-puns-tracker-server

3.  composer require sensio/framework-extra-bundle

4.  php bin/console make:controller MovieController

src/Controller/MovieController.php

5.  php bin/console make:controller ApiController

6.  php bin/console make:entity
add attributes

7.  php bin/console make:migration

8.  