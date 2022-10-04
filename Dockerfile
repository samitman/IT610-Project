FROM ubuntu
RUN apt-get update
RUN apt install -y apache2 
RUN apt install -y apache2-utils 
RUN apt clean 
EXPOSE 80
CMD apachectl -DFOREGROUND