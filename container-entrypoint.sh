#!/bin/sh
set -eu

PORT="${PORT:-3000}"
sed -ri "s/^Listen 80$/Listen ${PORT}/" /etc/apache2/ports.conf
sed -ri "s#<VirtualHost \*:80>#<VirtualHost *:${PORT}>#" /etc/apache2/sites-available/000-default.conf

if [ -z "${APP_KEY:-}" ]; then
    APP_KEY="base64:$(php -r 'echo base64_encode(random_bytes(32));')"
    export APP_KEY
fi

exec apache2-foreground
