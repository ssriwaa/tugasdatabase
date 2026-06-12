<?php

namespace App\Libraries;

use MongoDB\Client;

class MongoDB
{
    public function connect()
    {
        $client = new Client("mongodb://127.0.0.1:27017");

        return $client->ci4_upload;
    }
}