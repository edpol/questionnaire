# Questionnaire

###End Points

{{url}}/api/question/{{order}}

###Install
``` 
$ git clone  
$ composer install  
ed .env, add DB information  
MySQL> create database questionnaire  
MySQL> use questionnaire  
MySQL> GRANT ALL PRIVILEGES ON questionnaire.* 
       TO 'curious'@'localhost' 
       IDENTIFIED BY 'george'  
$ php artisan key:generate  
$ php artisan make:auth  
$ php artisan migrate --seed
```

Every time you change a VUE component (run at least once in production server)
```
npm run dev 
```
or to have it run continuously watching (good for development)
```
npm run watch-poll
```

### Usage
Log in to the questionnaire web site
add a question,  
the question has an optional heading  
at least 1 answer  
the answer has an add or remove option  
and it has one item  
