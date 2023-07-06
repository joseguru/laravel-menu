<?php

namespace JoseGuru\LaravelMenu\Facades;

use Illuminate\Support\Facades\Facade;

class CustomPackageFacade extends Facade
{

    /**
    * Get the registered name of the component.
    *
    * @return string
    */
    protected static function getFacadeAccessor() { return 'custom-package'; }
}
