#!/usr/bin/env bash

# copy configuration files
cp /vagrant/vagrant-config/nginx.conf /etc/nginx
cp /vagrant/vagrant-config/fastcgi_params /etc/nginx
cp /vagrant/vagrant-config/php-sock.conf /etc/nginx/conf.d
cp /vagrant/vagrant-config/default /etc/nginx/sites-available
cp /vagrant/vagrant-config/php.ini /etc/php5/fpm
cp /vagrant/vagrant-config/www.conf /etc/php5/fpm/pool.d
cp /vagrant/vagrant-config/memcached.conf /etc

