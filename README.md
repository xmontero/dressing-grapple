# dressing-grapple

A demo project to test how to do call java classes from PHP.

## To run the machine the first time

    host$ vagrant up
    host$ vagrant ssh
    virtual$ cd /vagrant/php
    virtual$ composer install
    
## To run the java demo

    virtual$ cd /vagrant
    virtual$ tools/compile_java
    virtual$ tools/demo_java

## To run the unit-tests

    virtual$ cd /vagrant
    virtual$ tools/phpunit

## To run a plain-PHP demo

    virtual$ cd /vagrant
    virtual$ tools/demo_php
