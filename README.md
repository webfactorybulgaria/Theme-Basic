# Basic Theme

This module is part of [TypiCMS](https://github.com/TypiCMS/Base), a multilingual CMS based on Laravel 5.  


```composer require webfactorybulgaria/theme-basic```

in config/app.js:

after core add:

```TypiCMS\Modules\ThemeBasic\Providers\ModuleProvider::class,```

before core add:
```TypiCMS\Modules\Contacts\Providers\ModuleProvider::class,```
```TypiCMS\Modules\Slides\Providers\ModuleProvider::class,```
```TypiCMS\Modules\Partners\Providers\ModuleProvider::class,```



```php artisan vendor:publish```
```php artisan migrate```
```#php artisan db:seed --class=UserTableSeeder```

