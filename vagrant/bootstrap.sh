#!/usr/bin/env bash

# inspired here: https://www.vagrantup.com/docs/getting-started/provisioning.html

# Setup the system.
apt-get update
apt-get install -y default-jdk junit4                                           # Java sdk and unit-testing
apt-get install -y php php-xdebug php-xml zip unzip composer doxygen graphviz   # For running the PHP demo from the CLI, with phpunit and so on.
apt-get install -y php-cgi tomcat8                                              # Tomcat serving php
apt-get install -y libapache2-mod-php apache2                                   # Apache serving php

# Install the PHP bridge for the tomcat
cp -a /vagrant/vagrant/php_java_bridge/JavaBridgeTemplate621.war /var/lib/tomcat8/webapps/JavaBridge.war

# Make the tomcat access our compiled files
ln -sf /vagrant/build/xavi_montero /var/lib/tomcat8/lib/

# Tune the PHP in the CLI and apache2 configuration so it can consume the JavaBridge downloading the include from the tomcat.
# TODO: Use composer or other tools to make sure we do not need a remote call.
# TODO: Once done, eliminate the 'require_once' calling 'http://' from apache2 and cli controllers of the demo.
ln -sf /vagrant/vagrant/php/vagrant.ini /etc/php/7.0/cli/conf.d/99-vagrant.ini
ln -sf /vagrant/vagrant/php/vagrant.ini /etc/php/7.0/apache2/conf.d/99-vagrant.ini
service apache2 reload

# Setup the demo/Web
mkdir /var/www/html/PhpToJavaDemo
ln -sf /vagrant/php/demo/Web/demo.php /var/www/html/PhpToJavaDemo/

# User mode
su vagrant

# Setup the Java part.
cd /vagrant
tools/compile_java

# Setup the PHP part.
cd /vagrant/php
composer install
