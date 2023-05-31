#FROM php:7.4-apache
FROM wordpress:latest
COPY . /var/www/html/
RUN apt update -y

#RUN docker-php-ext-install mysqli

#RUN apt -y install git binutils && \
 #   git clone https://github.com/aws/efs-utils && \
  #  cd efs-utils && \
   # ./build-deb.sh && \
   # apt-get -y install ./build/amazon-efs-utils*deb

EXPOSE 80
