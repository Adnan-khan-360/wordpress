#!/bin/bash
echo "Cleaning themes directory..."
THEMES_DIR="/var/www/html/wordpress/wp-content/themes"

# Backup
BACKUP_DIR="/tmp/theme-backup-$(date +%Y%m%d-%H%M%S)"
sudo mkdir -p $BACKUP_DIR
sudo cp -r $THEMES_DIR/* $BACKUP_DIR/ 2>/dev/null || true

# Remove and recreate directory
sudo rm -rf $THEMES_DIR
sudo mkdir -p $THEMES_DIR
sudo chown www-data:www-data $THEMES_DIR
sudo chmod 755 $THEMES_DIR

echo "Themes directory completely reset"