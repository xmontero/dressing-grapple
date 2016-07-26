# dressing-grapple

A demo project to test how to do call java classes from PHP.

## To run the machine the first time

    host$ vagrant up
    host$ vagrant ssh
    virtual$ cd /vagrant/php
    virtual$ composer install
    
## To run the unit-tests

    host$ vagrant up
    host$ vagrant ssh
    virtual$ cd /vagrant/php
    virtual$ vendor/phpunit/phpunit/phpunit

## To run a plain-PHP demo

    host$ vagrant up
    host$ vagrant ssh
    virtual$ cd /vagrant/php
    virtual$ tools/demo
