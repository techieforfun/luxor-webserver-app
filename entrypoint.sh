#!/bin/sh

cd /app || exit
php ./healthcheck.php "$TARGET_ENDPOINTS" 2>&1 &
php -S 0.0.0.0:8080 ./index.php
