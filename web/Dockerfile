FROM php:7.3.3-apache

#update packages
RUN apt-get update && apt-get upgrade -y --allow-unauthenticated

#install mysql php extension to interface with db
RUN docker-php-ext-install mysqli

#open port 80 for apache
EXPOSE 80
