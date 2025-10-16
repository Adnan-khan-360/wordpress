#!/bin/bash
echo "Fixing ownership and permissions..."
sudo chown -R www-data:www-data /var/www/html/wordpress/wp-content/themes/
sudo chmod -R 755 /var/www/html/wordpress/wp-content/themes/