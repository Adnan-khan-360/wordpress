#!/bin/bash
echo "✅ Running AfterInstall"
chown -R www-data:www-data /var/www/html/wordpress
systemctl restart apache2
echo "WordPress deployment successful 🚀"