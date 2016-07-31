#!/usr/bin/env bash

# inspired here: https://www.vagrantup.com/docs/getting-started/provisioning.html

# Setup the system.
apt-get update
apt-get install -y php php-xdebug php-xml zip unzip composer doxygen graphviz default-jdk

# User mode
su vagrant

# Setup the Java part.
cd /vagrant
tools/compile_java

# Setup the PHP part.
cd /vagrant/php
composer install
