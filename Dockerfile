# Use an official PHP runtime as a base image
FROM php:latest

# Set the working directory in the container
WORKDIR /var/www/html

# Install PHP extensions required for Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/html/

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install dependencies
RUN composer install

# Copy all other application files
COPY . .

# Expose port 80 to the outside world
EXPOSE 80

# Start PHP built-in server when the container launches
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
