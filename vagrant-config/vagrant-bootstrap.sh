#!/usr/bin/env bash

# update OS
aptitude update -y
aptitude upgrade -y

# install applications
aptitude install -y python-software-properties
add-apt-repository ppa:nginx/development

aptitude update -y
aptitude install -y screen nginx dkms
aptitude install -y php5-fpm php5-suhosin php5-gd php-apc php5-mcrypt php5-cli php5-curl memcached php5-memcache 
aptitude install -y mysql-server php5-mysql

# copy the configs
/bin/bash /vagrant/server-config.sh
