<?php
namespace Fitztrev\LaravelHtmlMinify;

use \Illuminate\Support\Facades\Facade;

/**
 * @see \Fitztrev\LaravelHtmlMinify\LaravelHtmlMinifyCompiler
 */
class LaravelHtmlMinifyFacade extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return static::$app['view']->getEngineResolver()->resolve('blade.php')->getCompiler();
    }

}
