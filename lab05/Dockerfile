# Use Debian as base image
FROM debian:latest

# Mount volumes for MySQL data and logs
VOLUME /var/lib/mysql
VOLUME /var/log

# Install Apache2, PHP, PHP modules, MariaDB, and Supervisor
RUN apt-get update && \
    apt-get install -y apache2 php libapache2-mod-php php-mysql mariadb-server supervisor && \
    apt-get clean

# Add WordPress files to /var/www/html
ADD https://wordpress.org/latest.tar.gz /var/www/html/
RUN tar -xzf /var/www/html/latest.tar.gz -C /var/www/html/ --strip-components=1 && rm /var/www/html/latest.tar.gz

# Copy configuration files for Apache2, PHP, and MariaDB
COPY files/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf
COPY files/apache2/apache2.conf /etc/apache2/apache2.conf
COPY files/php/php.ini /etc/php/8.2/apache2/php.ini
COPY files/mariadb/50-server.cnf /etc/mysql/mariadb.conf.d/50-server.cnf

# Copy Supervisor configuration file
COPY files/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Copy the configuration file for WordPress
COPY files/wp-config.php /var/www/html/wp-config.php

# Create MySQL socket directory and set permissions
RUN mkdir /var/run/mysqld && chown mysql:mysql /var/run/mysqld

# Expose port 80 for HTTP traffic
EXPOSE 80

# Start Supervisor
CMD ["/usr/bin/supervisord", "-n", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
