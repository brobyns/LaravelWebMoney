<?php
/**
 * Created by PhpStorm.
 * User: bramr
 * Date: 12/01/2017
 * Time: 18:54
 */

namespace Pusha\LaravelWebMoney;

use Illuminate\Support\Facades\Facade;

class WMFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'webmoney';
    }
}