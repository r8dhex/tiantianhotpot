#!/usr/bin/env bash

# inject nameservers to resolv.conf
echo "nameserver 192.168.1.1" > /etc/resolv.conf
echo "nameserver 8.8.8.8" >> /etc/resolv.conf
echo "nameserver 8.8.8.4" >> /etc/resolv.conf

# update OS
aptitude update -y
aptitude upgrade -y

# install applications
aptitude install -y python-software-properties
add-apt-repository ppa:nginx/development

aptitude update -y
aptitude install -y screen nginx dkms
aptitude install -y php5-fpm php5-suhosin php5-gd php-apc php5-mcrypt php5-cli php5-curl memcached php5-memcache

# copy configuration files
cp /vagrant/vagrant-config/nginx.conf /etc/nginx
cp /vagrant/vagrant-config/fastcgi_params /etc/nginx
cp /vagrant/vagrant-config/php-sock.conf /etc/nginx/conf.d
cp /vagrant/vagrant-config/default /etc/nginx/sites-available
cp /vagrant/vagrant-config/php.ini /etc/php5/fpm
cp /vagrant/vagrant-config/www.conf /etc/php5/fpm/pool.d

/etc/init.d/vboxadd setup
reboot

