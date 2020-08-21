<?php

namespace Amritms\FreshbooksClientPhp;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Amritms\FreshbooksClientPhp\Skeleton\SkeletonClass
 */
class FreshbooksClientPhpFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'freshbooks-client-php';
    }
}
