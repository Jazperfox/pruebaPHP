FROM php:8.2-apache

# Instalar utilidades y dependencias necesarias
RUN apt-get update && apt-get install -y \
    gnupg2 \
    apt-transport-https \
    ca-certificates \
    curl \
    unixodbc-dev \
    gcc \
    g++ \
    make \
    autoconf \
    libc-dev \
    pkg-config

# Agregar repositorio de Microsoft
RUN curl https://packages.microsoft.com/keys/microsoft.asc | apt-key add - && \
    curl https://packages.microsoft.com/config/debian/11/prod.list > /etc/apt/sources.list.d/mssql-release.list && \
    apt-get update

# Aceptar EULA y forzar instalación ignorando conflictos menores
RUN ACCEPT_EULA=Y apt-get install -y --allow-downgrades --allow-change-held-packages msodbcsql17 mssql-tools

# Instalar las extensiones de PHP para SQL Server
RUN pecl install sqlsrv pdo_sqlsrv && \
    docker-php-ext-enable sqlsrv pdo_sqlsrv

# Copiar tus archivos PHP
COPY ./public/ /var/www/html/

EXPOSE 80
