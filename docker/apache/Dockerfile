ARG SERVERNAME

FROM httpd:2.4.46-alpine

# Own HTTPD confiration and vhost file to proxy php requests to php-fpm container
COPY ./httpd.conf /usr/local/apache2/conf/httpd.conf
COPY ./vhost.conf /usr/local/apache2/conf/vhost.conf