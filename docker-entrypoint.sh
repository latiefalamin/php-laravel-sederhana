#!/bin/bash
set -e

# Jalankan migration
php artisan migrate --force

# Jalankan Apache
exec apache2-foreground
