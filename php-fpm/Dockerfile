FROM php:7.2-fpm
RUN apt-get update -y && apt-get install -y libpng-dev libfreetype6-dev
# Set Xdebug
RUN pecl install xdebug && docker-php-ext-enable xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_autostart=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_host=host.docker.internal" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_log=/var/www/html/xdebug.log" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_connect_back=0" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_port=9000" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.idekey=VSCODE" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.remote_handler=dbgp" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo "xdebug.default_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN docker-php-ext-install mysqli pdo pdo_mysql
# Opencart extensions
RUN apt-get install -y libjpeg62-turbo-dev
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd
RUN apt-get install -y \
    zlib1g-dev \
    libzip-dev \
    && docker-php-ext-install zip
RUN apt-get install -y libmcrypt-dev
RUN pecl install mcrypt-1.0.1 \
    && docker-php-ext-enable mcrypt
# Set php.ini configs
RUN echo "file_uploads = On\n" \
    "memory_limit = 500M\n" \
    "upload_max_filesize = 500M\n" \
    "post_max_size = 500M\n" \
    "max_execution_time = 0\n" \
    >> /usr/local/etc/php/conf.d/uploads.ini
# Magento Specific extensions
RUN apt-get install -y libicu-dev \
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl
RUN docker-php-ext-install bcmath
RUN apt install -y libxslt-dev
RUN docker-php-ext-install xsl
RUN rm /etc/apt/preferences.d/no-debian-php
RUN apt-get update \
    && apt-get -y install libxml2-dev php-soap \
    && pear install -a SOAP-0.13.0 \
    && docker-php-ext-install soap
# Magento specific config to handle tons of requests
RUN sed -i 's/^.*pm.max_children = .*$/pm.max_children = 500/' /usr/local/etc/php-fpm.d/www.conf
RUN sed -i 's/^.*pm.max_spare_servers = .*$/pm.max_spare_servers = 20/' /usr/local/etc/php-fpm.d/www.conf
RUN sed -i 's/^.*pm.start_servers = .*$/pm.start_servers = 20/' /usr/local/etc/php-fpm.d/www.conf
# Redis extension
RUN pecl install -o -f redis \
&&  rm -rf /tmp/pear \
&&  docker-php-ext-enable redis
