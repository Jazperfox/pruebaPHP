# Usa imagen PHP + Apache
FROM php:8.2-apache

# Copia el contenido de 'public' al servidor web
COPY ./public/ /var/www/html/

# Expone el puerto estándar
EXPOSE 80
