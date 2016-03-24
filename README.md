# Basic Theme

This module is part of [TypiCMS](https://github.com/TypiCMS/Base), a multilingual CMS based on Laravel 5.  


```
composer require webfactorybulgaria/theme-basic
```

in config/app.php:


before core add:
```
TypiCMS\Modules\Contacts\Providers\ModuleProvider::class,
TypiCMS\Modules\Slides\Providers\ModuleProvider::class,
TypiCMS\Modules\Partners\Providers\ModuleProvider::class,
```

after core add:
```
TypiCMS\Modules\ThemeBasic\Providers\ModuleProvider::class,
```

Run these commands in the CLI
```
php artisan vendor:publish
php artisan migrate
php artisan db:seed --class=ThemeBasicSeeder
```

In gulpfile.js
cahnge 
```
return gulp.src('resources/assets/less/public/master.less')
```
to 
```
return gulp.src('resources/themes/basic/less/public/master.less')
```

then in the js-public section add
```
'node_modules/bootstrap/js/carousel.js',
```

run 
```
gulp all
```


Change the permissions for public/uploads i.e.
```
chmod -R uog+w public/uploads
```