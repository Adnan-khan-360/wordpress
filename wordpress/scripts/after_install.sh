#!/bin/bash
echo "=== AfterInstall: Starting ==="

# Fix ownership and permissions
chown -R www-data:www-data /var/www/html/wordpress/wp-content/themes
chmod -R 755 /var/www/html/wordpress/wp-content/themes

# Restart Apache to apply theme changes
echo "Restarting Apache service..."
systemctl restart apache2

# Optional: Verify service status
systemctl is-active --quiet apache2 && echo "Apache restarted successfully." || echo "Warning: Apache restart failed."

echo "=== AfterInstall: Completed ==="