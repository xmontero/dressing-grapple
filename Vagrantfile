# Inspired here:
# https://github.com/patrickdlee/vagrant-examples/blob/master/example3/Vagrantfile
# https://github.com/sapienza/vagrant-php-box/blob/master/Vagrantfile

Vagrant.configure("2") do |config|
  # All Vagrant configuration is done here. The most common configuration
  # options are documented and commented below. For a complete reference,
  # please see the online documentation at vagrantup.com.

  # Every Vagrant virtual environment requires a box to build off of.
  #config.vm.box = "ubuntu/xenial64"
  config.vm.box = "gbarbieru/xenial"
  config.vm.hostname = "dressing-grapple-php-to-java-bridge"
  config.vm.provision :shell, path: "vagrant/bootstrap.sh"

  config.vm.network :private_network, ip: "172.16.111.12"
end
