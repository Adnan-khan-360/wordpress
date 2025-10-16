#!/bin/bash

for zip_file in /var/www/html/wordpress/wp-content/themes/*.zip; do
  unzip -o $zip_file -d /var/www/html/wordpress/wp-content/themes/
done

echo "Themes deployed successfully."

