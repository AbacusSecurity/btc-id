<?php

namespace BtcId\BtcId;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BtcId\BtcId\Skeleton\SkeletonClass
 */
class BtcIdFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'btc-id';
    }
}
