# Introduction-

Blogs - Simple Laravel 5.5 application which gives a basic idea about Laravel CRUD operations

# Prerequisites-

1) Apache2/nginx1.9
2) Php7(min)
3) mysql 5.5(min)
4) Composer 1.6(min)
5) Laravel 5.5

# Installation & Setup-

Blogs application needs laravel 5.5 to run.
Please visit/refer below links for setup of laravel 5.5,
https://www.digitalocean.com/community/tutorials/how-to-deploy-a-laravel-application-with-nginx-on-ubuntu-16-04
https://gist.github.com/santoshachari/87bf77baeb45a65eb83b553aceb135a3
https://www.howtoforge.com/tutorial/install-laravel-on-ubuntu-for-apache/

Official url
https://laravel.com/docs/5.5#server-requirements

Once you are done with setup,
1) Download this package into your web directory
Inside directory,
2) Copy .env.example file to .env and configure settings accordingly.
3) Run “composer update” which will pull all laravel plugins and providers to run app.
4) Change permissions of bootstrap/cache and storage folder to 777
5) Run “php artisan key:generate” to generate your applications key
6) Create a database blogs or any other name which is mentioned in .env, then Run “php artisan migrate” to establish database schema and necessary tables.
7) Virtual hosts/ server root should be pointed to public directory

# Usage -
Hit your Server name / url you setup in browser and enjoy...

# Considerations
1) This application is build considering basic CRUD operations
2) Currently, controller is processing CRUD operations which can be done inside MODEL or separate SERVICES can be written.