<p align="center"><img src="art/preview.png" alt="Preview of Laravel Translation Panel"></p>

# Laravel Translation panel

## Getting Started

You can download the package via composer:

```bash
composer require monosniper/laravel-translate
```

Publish config file (kirano_translate.php):

```bash
php artisan vendor:publish --provider="Monosniper\LaravelTranslate\LaravelTranslateServiceProvider"
```

Also you need to add /livewire/* path in csrf protection except array (bootstrap/app.php):

```php
$middleware->validateCsrfTokens(except: [
    ...
    'livewire/*',
]);
```
