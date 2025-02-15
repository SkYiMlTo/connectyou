# Use the official PHP image with Apache
FROM php:8.0-apache

# Install the pdo_mysql extension
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files into the web root
COPY . /var/www/html/

# Set correct permissions for Apache
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for web traffic
EXPOSE 80
