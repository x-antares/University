# University

This app allows students to add data on the site. 


## Requirements

* PHP 7.2 =<
* Composer
* Web server **Apache2**


## How to Deploy

1. Cloning repository: `git clone https://github.com/0Jac0k19D01rupal0/University.git`
2. Create your own database.
3. Configure bootstrap.php:

    'driver' => 'pdo_mysql',
    'user' => 'username',
    'password' => 'userpassword',
    'dbname' => 'databasename',

4. Installing composer packages `composer install`
5. Make migrate `./vendor/bin/doctrine-migrations migrate`
6. Go to your site.


## How load fixtures

`php load_fixtures.php`

## How to see your load fixture in console

`php list_student.php`


