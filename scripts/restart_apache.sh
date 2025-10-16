#!/bin/bash

# Start Apache service after deployment
systemctl restart apache2

# Optional: reload PHP-FPM if used
# systemctl reload php8.1-fpm

echo "Apache service started successfully."

