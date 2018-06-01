docker run -p 3333:3306 --name my-mysql -e MYSQL_ROOT_PASSWORD=ja1509 -d mysql:5.7 --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci
docker run -d --name phpmyadmin --link my-mysql -p 3777:80 -e PMA_ARBITRARY=1 phpmyadmin/phpmyadmin
docker run -d -p 80:80 --name apache-app -v //John/www:/var/www/html php:7.0-apache
#We recommend that you add a custom php.ini configuration. 
#COPY it into /usr/local/etc/php by adding one more line to the Dockerfile above and running the same commands to build and run
docker cp php.ini apache-app:/php.ini
# https://hub.docker.com/_/php/
docker-php-ext-install mysqli # Dentro del container de apache-app
service apache2 reload # Dentro del container de apache-app