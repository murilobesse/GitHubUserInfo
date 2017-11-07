1 - Setup Laravel: https://kyleferg.com/laravel-development-with-docker/#laravel-setup

2 - Setup Docker: https://docs.docker.com/

3 - Make sure both is running.

4 - In the project root folder add docker-compose.yml file:
    version: '2'
	services:
	    web:
	        build:
	            context: ./
	            dockerfile: web.docker
	        volumes:
	            - ./:/var/www
	        ports:
	            - "8080:80"
	        links:
	            - app
	    app:
	        build:
	            context: ./
	            dockerfile: app.docker
	        volumes:
	            - ./:/var/www
              
5 - add app.docker:
    FROM php:7-fpm
	
    RUN apt-get update && apt-get install -y libmcrypt-dev mysql-client \
        && docker-php-ext-install mcrypt pdo_mysql

    WORKDIR /var/www
    
6 - add web.docker:
    FROM nginx:1.10
	
    ADD ./vhost.conf /etc/nginx/conf.d/default.conf
    WORKDIR /var/www
    
7 - add vhost.conf:
    server {
	    listen 80;
	    index index.php index.html;
	    root /var/www/public;
	
	    location / {
	        try_files $uri /index.php?$args;
	    }
	
	    location ~ \.php$ {
	        fastcgi_split_path_info ^(.+\.php)(/.+)$;
	        fastcgi_pass app:9000;
	        fastcgi_index index.php;
	        include fastcgi_params;
	        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
	        fastcgi_param PATH_INFO $fastcgi_path_info;
	    }
	}
  
8 - Once you run the command $ docker-compose up -d it should be runnin on http://localhost:8080

  
