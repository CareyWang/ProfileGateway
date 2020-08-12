#!/bin/bash
git checkout .
git pull

composer install --optimize-autoloader --no-dev
php artisan migrate --force
php artisan config:cache

sudo chown -R www-data:www-data /var/www/http/ProfileGateway
sudo chmod 777 /var/www/http/ProfileGateway/storage/
