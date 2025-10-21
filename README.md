# Laravel Sinhala Localization (si)

<div align="center"> <img src="https://nadeesha95.github.io//Nadeesha%20weerasekara%20portfolio_files/Package.png"> </div>

Sinhala (සිංහල) JSON translations for Laravel.  
Works with Laravel 9, 10, 11, 12.
Version v1.0.0
Developer : Nadeesha Sahen weerasekara

## Install

```bash
composer require nadeesha/laravel-si-localization

```
If you want to customize the file inside your app

```bash
php artisan vendor:publish --tag=sinhala-lang

```
This will create/update:

```bash
/resources/lang/si.json

```

## Usage

Set the app locale to si:

```bash
// globally (config/app.php)
'locale' => 'si';

// or per-request
app()->setLocale('si')

```

Translate anywhere:

```bash
__('100%'); // ➜ "සියත්ව | හැතප්ම"
__('A');    // ➜ "ක | අ | වරයකු | වරයෙකු | තාවයක්"
__('3D');   // ➜ "ත්‍රිමාණ"
__('ANP');  // ➜ "ඒජාප | ඇන්පී"

```

## Requirements

PHP 8.1+

Laravel 9/10/11/12

## Contributing

PRs welcome! Please run:

```bash
composer validate
```

## License
MIT © Nadeesha
