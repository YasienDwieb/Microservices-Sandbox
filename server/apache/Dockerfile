FROM httpd:latest
# Copy apache vhost file to proxy php requests to php-fpm container
COPY ./conf/site.conf /usr/local/apache2/conf/site.apache.conf
RUN echo "Include /usr/local/apache2/conf/site.apache.conf" \
    >> /usr/local/apache2/conf/httpd.conf
