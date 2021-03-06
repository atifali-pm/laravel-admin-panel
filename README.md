# laravel-adminpanel

## Introduction
* This is a laravel Admin Panel, based on [Rappasoft Laravel Boilerplate](https://github.com/rappasoft/laravel-5-boilerplate/releases/tag/4.5.7), with enhancemenets and many modules pre-made, just for you.
* The project is taken to Laravel 5.6 so we can develop from the latest Laravel.
* Article on our Admin Panel on CodeWall : [https://www.codewall.co.uk/the-laravel-admin-panel-that-you-need/](https://www.codewall.co.uk/the-laravel-admin-panel-that-you-need/)

## Features
For Laravel 5 Boilerplate Features : [Features](https://github.com/rappasoft/laravel-5-boilerplate/wiki#features)

## Additional Features
* Built-in Laravel Boilerplate Module Generator,
* Dynamic Menu/Sidebar Builder
* CMS Pages Module
* Email Template Module
* Blog Module
* FAQ Module
* API Boilerplate.

## Built-in Laravel Boilerplate Module Generator
It gives you the ability to create a module using a sweet GUI, where you put in the Module Name and it will generate all the necessary files for you, like Model, Traits, Relationship, Migration, Controllers, Views and routes. So when you are done creating a module, you can directly go to the route generated and see your new module. Since, this does not have the ability to generate table fields for now, so you have to write the migration file that is generated and run a manual php artisan migrate command, and you are good to go.

We are using the module generator as a package, you can find it here: [Module Generator For Laravel Adminpanel](https://github.com/bvipul/generator).

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.6/installation#installation)


Clone the repository

    git clone https://github.com/atifali-pm/laravel-adminpanel.git

Switch to the repo folder

    cd laravel-adminpanel

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Install all the dependencies using composer

    composer install

Generate a new application key

    php artisan key:generate

Generate a new JWT secret key (If you want to use API)
    php artisan jwt:secret

Generate a new JWT authentication secret key

    php artisan jwt:secret

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Run the database seeders

    php artisan db:seed

Install the javascript dependencies using npm

    npm install

Compile the dependencies

    npm run development

For generating the files of unisharp file manager

    php artisan vendor:publish --tag=lfm_public

For linking storage folder in public

    php artisan storage:link

Start the local development server

    php artisan serve



You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone https://github.com/atifali-pm/laravel-adminpanel.git
    cd laravel-adminpanel
    cp .env.example .env
    composer install
    npm install
    npm run development
    php artisan storage:link
    php artisan key:generate
    php artisan jwt:secret
    php artisan vendor:publish --tag=lfm_public
    
## Directory permissions
    sudo chown -R $USER:www-data storage
    sudo chown -R $USER:www-data bootstrap/cache

then to set directory permission try this:
   
    chmod -R 775 storage
    chmod -R 775 bootstrap/cache

## Virtual host settings: 
Make sure to use: 
    
    Options +FollowSymlinks
    AllowOverride All
    Require all granted


## Logging In

`php artisan db:seed` adds three users with respective roles. The credentials are as follows:

* Admin Istrator: `admin@admin.com`
* Backend User: `executive@executive.com`
* Default User: `user@user.com`

Password: `1234`

## ScreenShots

## Dashboard
![Screenshot](screenshots/dashboard.png)

## User Listing
![Screenshot](screenshots/users.png)

## Settings
![Screenshot](screenshots/settings.png)
