# Questionnaire

###End Points

url/api/question/{{order}}



###Install
````  
$ git clone  
$ composer install  
ed .env, add DB information  
MySQL> create database questionnaire  
MySQL> use questionnaire  
MySQL> GRANT ALL PRIVILEGES ON questionnaire.* 
       TO 'curious'@'localhost' 
       IDENTIFIED BY 'george'  
$ php artisan make:auth  
$ php artisan migrate --seed
