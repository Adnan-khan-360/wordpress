#!/bin/bash
echo "Stopping Apache before deployment..."
sudo systemctl stop apache2

echo "Removing existing WordPress folder..."
sudo rm -rf /var/www/html/wordpress/*