FROM php:8.2-apache

# Enable Apache mod_rewrite if you're using URL rewriting
RUN a2enmod rewrite

# Copy your PHP files into Apache's root directory
COPY . /var/www/html/

# Change ownership and permissions
RUN chown -R www-data:www-data /var/www/html/

# Expose default Apache port
EXPOSE 80
