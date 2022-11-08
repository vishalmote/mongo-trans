<?php

namespace Coolsam\Transactions\Event;


class BaseTransactions
{
    private static $driverClass = 'Coolsam\Transactions\Drive\\';

    /**
     * @return mixed
     */
    public static function getDriver()
    {
        $driver = self::$driverClass . ucfirst(config('transactions.driver', 'Mongodb')) . 'Driver';
        return new $driver();
    }

    /**
     * @return mixed
     */
    public static function getCollection()
    {
        return config('transactions.collection', 'transactions');
    }
}