#!/bin/bash
echo "Setting permissions and restarting Apache..."
sudo chown -R www-data:www-data /var/www/html/wordpress
sudo chmod -R 755 /var/www/html/wordpress
sudo systemctl restart apache2