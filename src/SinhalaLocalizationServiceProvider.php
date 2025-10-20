<?php

namespace YourVendor\SiLocalization;

use Illuminate\Support\ServiceProvider;

class SinhalaLocalizationServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadJsonTranslationsFrom(__DIR__ . '/../resources/lang');

        $this->publishes([
            __DIR__ . '/../resources/lang/si.json' => lang_path('si.json'),
        ], 'sinhala-lang');
    }
}
