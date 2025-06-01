FROM php:8.2-fpm

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    nginx \
    ffmpeg

# Instalar extensiones de PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar toda la aplicación primero
COPY . .

# Configurar Nginx
RUN cp docker/nginx/default.conf /etc/nginx/sites-available/default

# Instalar dependencias de Composer
RUN composer install --no-dev --optimize-autoloader

# Configurar permisos para archivos estáticos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage \
    && chmod -R 755 /var/www/html/public \
    && chmod -R 755 /var/www/html/bootstrap/cache

# Crear directorios necesarios si no existen
RUN mkdir -p /var/www/html/storage/framework/{sessions,views,cache} \
    && chown -R www-data:www-data /var/www/html/storage/framework

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar Nginx y PHP-FPM
CMD ["sh", "-c", "service nginx start && php-fpm"] 