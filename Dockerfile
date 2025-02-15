# Use official PHP image
FROM php:8.2-fpm

# Set working directory
WORKDIR /var/www

# Copy project files
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port
EXPOSE 10000

# Set Laravel start command
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
