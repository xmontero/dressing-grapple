# dressing-grapple

A demo project to test how to call **Java** classes from **PHP**.

## To run the virtual machine the first time

    host$ vagrant up
    host$ vagrant ssh
    virtual$ cd /vagrant

* The `vagrant up` calls a bash provisioner located at `vagrant/bootstrap.sh`.

  * This file installs a few things with `apt-get`, like `php7`, `zip`, `doxygen` and a few more.
  * Then it installs and configures a `tomcat8` to serve the java,
  * and an `apache2` to serve the PHP.
  * Then compiles the java source,
  * and then runs a `composer` in the `php` directory.
   
  So after the `vagrant up` returns, the machine is ready to run the examples below.

* If you logout from your ssh, you'll have to `cd /vagrant` again as the next examples assume you are in the
`/vagrant` directory.

* If you are in Windows, maybe you want to `ssh` from `putty`. You can do so by ssh-ing to hostname `127.0.0.1`
and port `2222`. Username is `vagrant` and password is `vagrant`.

## 1. Java

### To run the Java unit-tests

    virtual$ tools/junit
    
* You should see `OK (1 test)`.
* The only tested method is the `sum()` method in the `Calculator` java class.
    
### To run the Java demo

    virtual$ tools/demo_java

* This should display a standard output text in which you see at the end the expression `3 + 4 = 7`.
* The `7` in there is computed by the java class `Calculator`, not the java `DemoApp` application class.
* The `Calculator` class is the one that will later be consumed from the PHP.

### To change the Java source and recompile

    virtual$ tools/compile_java
    
* Note that the vagrant provisioner does a first compilation for you, this is why you can run the junit and the demo
without having to manually compile.
* Wanna play around? Edit the sources at `/vagrant/java` and have the compiled binaries in `/vagrant/build`. 

## 2. Servers

There is info about the third-party PHP-Java-Bridge here:

* [php-java bridge home](http://php-java-bridge.sourceforge.net/pjb/index.php)
* [php-java bridge tutorial](http://renidev.javabolivia.com/2009/03/26/como-instalar-phpjavabride-hola-mundo-php-java-bridge/)

It uses a tomcat to serve the java classes over a port, and an apache on which you run your client PHP. 

### To test the tomcat

    http://172.16.111.12:8080/JavaBridge/test.php
    
* Load this from a browser in your host.
* This should show you a `phpinfo()` result. If so, the tomcat is up and running, serving your java classes to your php.
    
## 3. Php

### To run the PHP unit-tests

    virtual$ tools/phpunit

* You should see `OK (1 test, 1 assertion)`.
* The only tested thing is that when invoking the `Calculator` via the Php-Java-Bridge, a class of type `Java` is returned.
* It does not currently test the sum method because when trying it it breaks; probably because the bridge is old legacy code.
    
### To run a framework-less PHP CLI demo

    virtual$ tools/demo_php
    
* This should display a standard output text in which you see at the end the expression `3 + 4 = 7`.
* The `7` in there is computed by the java class `Calculator`, which is consumed from the PHP.

### To run a framework-less PHP web demo

    http://172.16.111.12/PhpToJavaDemo/demo.php
    
* Load this from a browser in your host.
* This should display an HTML content in which you see at the end the expression `3 + 4 = 7`. The `7` in there is
computed by the java class `Calculator`, not the PHP program itself.
* Boom! Apache-Php consuming java. **Done!**

## 4. Documentation
 
### To create the documentation 

    virtual$ tools/doxygen
    
* This runs the doxygen command installed by the vagrant provisioner.
* You will have the results at `/vagrant/doc/generated/doxygen/index.html`.
* You can open that file from a browser in the host computer via the vagrant shared directory.
