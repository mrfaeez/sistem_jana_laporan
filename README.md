# sistem_jana_laporan
Sistem Jana Laporan created using Laravel Framework, implemented in Dockers

Laravel-Version : Laravel 7.1
Docker : docker-compose

Steps to run :
1. build and run docker

    $ docker-compose build && docker-compose up -d

2. add hospital and medicine databases

    $ docker container ls                                       //check mysql container
    $ docker exec -it <container_name> /bin/bash                //enter the mysql container
    $ mysql -u root -p < 01-databases.sql                       //enter mysql , password = secret

3. migrate from laravel

    $ docker-compose exec php php artisan migrate

4. run seeder to extract data into mysql

    $docker-compose exec php php artisan db:seed

