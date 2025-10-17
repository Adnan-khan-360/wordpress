#!/bin/bash
set -e
cd /tmp/deploy

echo "Extracting new themes..."
unzip -o themes.zip -d /

chown -R www-data:www-data /var/www/html/wp-content/themes
chmod -R 755 /var/www/html/wp-content/themes

echo "New themes deployed successfully."