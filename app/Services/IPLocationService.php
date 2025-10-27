<?php

namespace App\Services;

use Exception;
use IP2Location\Database;

class IPLocationService
{
    protected Database $database;

    public function __construct()
    {
        try {
            $this->database = new Database(storage_path('app/ip2location/IP2LOCATION-LITE-DB1.BIN'));
        } catch (Exception) {

        }
    }

    public function getCountryFromIP($ip = null)
    {
        $ip = $ip ?? request()->ip();

        try {
            $records = $this->database->lookup($ip);
            return $records['countryCode'] ?? null;
        } catch (Exception) {
            return null;
        }
    }
}
