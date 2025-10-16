#!/bin/bash
echo "Starting Apache..."
sudo systemctl restart apache2
sudo systemctl enable apache2