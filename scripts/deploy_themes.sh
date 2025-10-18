#!/bin/bash
echo "=== Deploying Themes ==="
THEMES_DIR="/var/www/html/wordpress/wp-content/themes"

echo "Checking deployed themes..."
if [ -d "$THEMES_DIR" ]; then
    echo "Current themes directory contents:"
    ls -la "$THEMES_DIR"
    
    if [ "$(ls -A $THEMES_DIR)" ]; then
        echo "Themes deployed successfully:"
        find "$THEMES_DIR" -type f -name "*.php" -o -name "style.css" | head -10
    else
        echo "Themes directory is empty - deployment may have failed"
    fi
else
    echo "ERROR: Themes directory not found!"
    exit 1
fi

echo "Theme deployment verification completed"