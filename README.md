# dressing-grapple

A demo project to test how to call **Java** classes from **PHP**.

## To run the machine the first time

    host$ vagrant up
    host$ vagrant ssh
    virtual$ cd /vagrant

* The `vagrant up` calls a bash provisioner located at `vagrant/bootstrap.sh`. This file installs

  * a few things with `apt-get`,
  * then compiles the java source,
  * and then runs a `composer` in the `php` directory,
   
  so after the `vagrant up` returns, the machine is ready.

* If you logout from your ssh, you'll have to `cd /vagrant` again as the next examples assume you are in the
`/vagrant` directory.

* If you are in Windows, maybe you want to `ssh` from `putty`. You can do so by ssh-ing to hostname `127.0.0.1`
and port `2222`. Username is `vagrant` and password is `vagrant`.

## To run the Java unit-tests

    virtual$ tools/junit
    
## To run the Java demo

    virtual$ tools/demo_java

## To change the Java source and recompile

    virtual$ tools/compile_java
    
* Note that the vagrant provisioner does a first compilation for you, this is why you can run the junit and the demo
without having to manually compile. 

## To run the PHP unit-tests

    virtual$ tools/phpunit

## To run a framework-less PHP demo

    virtual$ tools/demo_php
