FROM ubuntu

#noninteractive mode to deal with php installation error
ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update

#install packages
RUN apt install -y apache2 apache2-utils php
RUN apt clean 

#populate apache html directory with website files
COPY website /var/www/html

#remove default index file
RUN rm /var/www/html/index.html

#open port 80
EXPOSE 80

CMD apachectl -DFOREGROUND