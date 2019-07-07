# PBO-Wrapper

####Required
Model Maker thing  
Multiple DB credentials in ENV so copy it.  
Set full path for models  
and other flags  


###Passport
To generate a Client

```php artisan passport:client --personal```

To Generate a Key for that client
```php
$user = App\User::find(1);

// Creating a token without scopes...
$token = $user->createToken('Token Name')->accessToken;

// Creating a token with scopes...
$token = $user->createToken('My Token', ['place-orders'])->accessToken;
```




###Install
git clone  
composer install  
ed .env, add DB information  
create database questionnaire  
use questionnaire  
GRANT ALL PRIVILEGES ON questionnaire.* TO 'curious'@'localhost' IDENTIFIED BY 'george'  
php artisan migrate --seed  
