FROM php:apache

# Install Xdebug only if it's not already installed
RUN if ! pecl list | grep -q xdebug; then \
        pecl install xdebug && docker-php-ext-enable xdebug; \
    fi

# Install mysqli
RUN docker-php-ext-install mysqli && \
    docker-php-ext-enable mysqli

EXPOSE 80
