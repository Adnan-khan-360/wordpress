#!/bin/bash

# Set permissions so Apache can serve WordPress
sudo chown -R www-data:www-data /var/www/html/wordpress/wp-content/themes
sudo chmod -R 755 /var/www/html/wordpress/wp-content/themes

# Restart Apache to load theme changes
sudo systemctl restart apache2

echo "Theme deployment completed successfully!"