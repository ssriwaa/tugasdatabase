<?php

namespace App\Libraries;

use MongoDB\Client;

class MongoDB
{
    public function connect()
    {
        $client = new Client("mongodb+srv://sriwaaayn_db_user:4N14j6VXF9glfx3S@cluster0.svzwjko.mongodb.net/?appName=Cluster0");

        return $client->ci4_upload;
    }
}