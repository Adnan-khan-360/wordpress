#!/bin/bash
set -e
THEMES_DIR="/var/www/html/wordpress/wp-content/themes"
BACKUP_DIR="/var/www/html/wordpress/wp-content/theme-backups"

mkdir -p $BACKUP_DIR
echo "Backing up existing themes..."
TIMESTAMP=$(date +%Y%m%d%H%M)
cp -r $THEMES_DIR "$BACKUP_DIR/themes-$TIMESTAMP"