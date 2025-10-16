#!/bin/bash
echo "=== BeforeInstall: Starting ==="

# Backup existing themes before new deployment
if [ -d "/var/www/html/wordpress/wp-content/themes" ]; then
  echo "Backing up current themes..."
  mkdir -p /tmp/theme_backup
  cp -r /var/www/html/wordpress/wp-content/themes/* /tmp/theme_backup/ || true
else
  echo "No existing themes to backup."
fi

# Clean old themes folder (optional — uncomment if needed)
# rm -rf /var/www/html/wordpress/wp-content/themes/*

echo "=== BeforeInstall: Completed ==="