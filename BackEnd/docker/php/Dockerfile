FROM php:8.2-fpm-alpine

RUN apk update \
	apk upgrade

RUN apk add \
		$PHPIZE_DEPS \
		git \
		freetype-dev \
		libjpeg-turbo-dev \
		libpng-dev \
	&& docker-php-ext-configure gd --with-jpeg --with-freetype \
	&& docker-php-ext-install gd

# https://hub.docker.com/_/composer
# COPY --from=composer:2.5.3 /usr/bin/composer /usr/bin/composer

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
	&& php -r "if (hash_file('sha384', 'composer-setup.php') === '55ce33d7678c5a611085589f1f3ddf8b3c52d662cd01d4ba75c0ee0459970c2200a51f492d557530c71c15d8dba01eae') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" \
	&& php composer-setup.php --version=2.5.3 --filename=composer --install-dir=/usr/bin \
	&& php -r "unlink('composer-setup.php');"

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN docker-php-ext-install pdo pdo_mysql