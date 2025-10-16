#!/bin/bash
echo "🚀 Running BeforeInstall"
cd /var/www/html
mkdir -p wordpress_backup_$(date +%F-%H-%M)
cp -r wordpress/* wordpress_backup_$(date +%F-%H-%M)/ || true
echo "Backup completed ✅"