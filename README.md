# Laravel 9.0 REST APi
This API is created using Laravel 9.0 API Resource. It has Apprenant, Classe and User. Protected routes are also added. Protected routes are accessed via Passport access token. But I do not implement It for the moment.

#### Following are the Models
* User
* Apprenant
* Classe

#### Usage
Clone the project via git clone or download the zip file.

##### .env
Copy contents of .env.example file to .env file. Create a database and connect your database in .env file.
##### Composer Install
cd into the project directory via terminal and run the following  command to install composer packages.
###### `composer install`
##### Generate Key
then run the following command to generate fresh key.
###### `php artisan key:generate`
##### Run Migration
then run the following command to create migrations in the databbase.
###### `php artisan migrate`
##### Passport Install
run the following command to install passport
###### `php artisan passport:install`
##### Make Auth System
then run the following command to generate the auth Scaffolding.
###### `php artisan make:auth`
##### Database Seeding
finally run the following command to seed the database with dummy content.
###### `php artisan db:seed`

### API EndPoints
##### Apprenant
* Apprenant GET All `http://localhost:8000/api/apprenants`
* Apprenant GET Single `http://localhost:8000/api/apprenants/{apprenant}`
* Apprenant POST Store `http://localhost:8000/api/apprenants`
* Apprenant PUT Update `http://localhost:8000/api/apprenants/{apprenant}`
* Apprenant DELETE Destroy `http://localhost:8000/api/apprenants/{apprenant}`
##### Classe
* clase GET All `http://localhost:8000/api/classes`
* clase GET Single `http://localhost:8000/api/classes/{class}`
* clase POST Store `http://localhost:8000/api/classes`
* clase PUT Update `http://localhost:8000/api/classes/{class}`
* clase DELETE Destroy `http://localhost:8000/api/classes/{class}`
