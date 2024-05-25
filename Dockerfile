FROM php:7.4-apache

# Enable SSL and other necessary Apache modules
RUN a2enmod ssl
RUN a2enmod rewrite

# Copy your Apache configuration file into the image
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Expose ports for HTTP and HTTPS
EXPOSE 80
EXPOSE 443
