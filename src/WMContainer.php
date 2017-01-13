<?php
/**
 * Created by PhpStorm.
 * User: bramr
 * Date: 12/01/2017
 * Time: 19:24
 */

namespace Pusha\LaravelWebMoney;

use Illuminate\Support\Facades\Config;

class WMContainer
{

    private $wmID;
    private $sender_purse;
    private $key;
    private $password;

    function  __construct() {
        $this->wmID = Config::get('webmoney.WMID');
        $this->sender_purse = Config::get('webmoney.purse');
        $this->key = Config::get('webmoney.key');
        $this->password = Config::get('webmoney.password');
    }

    /**
     * Transfer money.
     *
     * @return int|string
     */
    public function transfer($reqn, $recipient_purse, $amount, $description, $tranID)
    {
        $transfer = new WMRequestX2($this->wmID, $this->sender_purse, $this->key, $this->password,
                                    $reqn, $recipient_purse, $amount, $description, $tranID);

        return $transfer->validate();
    }
}