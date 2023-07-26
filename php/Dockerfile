# PHP-FPM 8.1 sürümünü kullanıyoruz
FROM php:8.1-fpm

# Gerekli bağımlılıkları yükleme
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip unzip

# PHP eklentilerini yükleme
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# PHP eklentilerini etkinleştirme
RUN docker-php-ext-enable gd pdo pdo_mysql

# Uygulama dosyalarını konteynere kopyalama
COPY ./login-panel/src/ /var/www/html/

# Çalışma dizinini ayarlama
WORKDIR /var/www/html

EXPOSE 9000
