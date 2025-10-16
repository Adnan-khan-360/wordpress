#!/bin/bash
echo "=== AfterInstall: Deploying theme changes ==="

# Copy only updated themes to live WordPress folder
rsync -av --ignore-existing /var/www/html/wordpress/artifact/wp-content/themes/ /var/www/html/wordpress/wp-content/themes/

# Set correct permissions
chown -R www-data:www-data /var/www/html/wordpress/wp-content/themes
chmod -R 755 /var/www/html/wordpress/wp-content/themes

# Restart Apache to reflect theme changes
systemctl restart apache2

echo "=== AfterInstall: Completed ==="