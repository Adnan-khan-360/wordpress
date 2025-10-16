#!/bin/bash

mkdir -p /var/www/html/wordpress/wp-content/themes_backup
cp -r /var/www/html/wordpress/wp-content/themes/* /var/www/html/wordpress/wp-content/themes_backup/

echo "Themes backed up."
