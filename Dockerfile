FROM node:22-bookworm-slim AS assets
WORKDIR /app
COPY package.json package-lock.json ./
RUN npm install --global npm@10.9.9 && npm ci --no-audit --no-fund
COPY vite.config.js ./
COPY resources ./resources
COPY public ./public
RUN npm run build

FROM php:8.3-apache AS app
ENV ASSET_URL=/
RUN apt-get update \
    && apt-get install -y --no-install-recommends libonig-dev libxml2-dev libzip-dev unzip \
    && docker-php-ext-install mbstring xml zip \
    && a2enmod rewrite headers \
    && rm -rf /var/lib/apt/lists/*
COPY --from=composer:2.7.1 /usr/bin/composer /usr/local/bin/composer
WORKDIR /var/www/html
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-progress --optimize-autoloader --no-scripts
COPY artisan ./artisan
COPY app ./app
COPY bootstrap ./bootstrap
COPY config ./config
COPY database ./database
COPY public ./public
COPY resources/views ./resources/views
COPY routes ./routes
COPY storage ./storage
COPY container-entrypoint.sh /usr/local/bin/container-entrypoint.sh
RUN composer dump-autoload --no-dev --optimize --no-interaction
COPY --from=assets /app/public/build ./public/build
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf \
    && sed -ri '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf \
    && chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R ug+rwx storage bootstrap/cache \
    && chmod +x /usr/local/bin/container-entrypoint.sh
ENV APP_ENV=production APP_DEBUG=false LOG_CHANNEL=stderr SESSION_DRIVER=file CACHE_STORE=file QUEUE_CONNECTION=sync
EXPOSE 3000
CMD ["/usr/local/bin/container-entrypoint.sh"]
