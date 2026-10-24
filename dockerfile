from php:8.2-apache
workdir /var/www/html
copy . /var/www/html
expose 80