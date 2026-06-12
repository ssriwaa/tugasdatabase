<?php

namespace App\Controllers;

use App\Libraries\MongoDB;

class TestMongo extends BaseController
{
    public function index()
    {
        $mongo = new MongoDB();

        $db = $mongo->connect();

        echo "Koneksi MongoDB Berhasil!";
    }
}