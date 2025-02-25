# Use an official PHP image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    npm\
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .
RUN cp .env.example .env

# Install Node.js & npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs && \
    npm install && \
    npm run build


RUN php artisan storage:link || true

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

RUN php artisan config:clear || true
RUN php artisan cache:clear || true
RUN php artisan config:cache || true

# Set proper permissions
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Expose port
EXPOSE 9000

# Start Laravel
CMD php artisan serve --host=0.0.0.0 --port=$PORT

