#!/bin/bash
echo "Stopping Apache..."
sudo systemctl stop apache2

echo "Cleaning WordPress folder..."
sudo rm -rf /var/www/html/wordpress/*

echo "Setting proper permissions..."
sudo chown -R ubuntu:ubuntu /var/www/html/wordpress
sudo chmod -R 755 /var/www/html/wordpress