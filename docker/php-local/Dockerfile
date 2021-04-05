FROM php:7.2.5-fpm
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libicu-dev \

    libcurl4-openssl-dev \
    unzip \
    nano \
    git \
    libexif-dev \
    libxrender1 \
    libfontconfig \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-install -j$(nproc) mbstring zip intl curl pdo_mysql tokenizer \
    && docker-php-ext-install exif \
    && rm -rf /var/lib/apt/lists/*

RUN curl -sS https://getcomposer.org/installer |  php -- --install-dir=/usr/local/bin --filename=composer
RUN mkdir /app
WORKDIR /app

RUN cd /usr/local/etc/php/conf.d/ && \
  echo 'memory_limit = -1' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini && \
  echo 'max_execution_time = 180' >> /usr/local/etc/php/conf.d/docker-php-maxexectime.ini



RUN usermod -u 1000 www-data