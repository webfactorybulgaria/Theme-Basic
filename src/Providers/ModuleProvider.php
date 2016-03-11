<?php

namespace TypiCMS\Modules\ThemeBasic\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Foundation\Application;
use TypiCMS\Modules\Theme\Providers\ModuleProvider as ServiceProvider;

class ModuleProvider extends ServiceProvider
{
    protected $themeName = 'basic';
    protected $sourceDir = __DIR__;

}
