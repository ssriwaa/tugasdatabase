<?php

namespace App\Models;

use App\Libraries\MongoDB;
use MongoDB\BSON\ObjectId;

class ProdukModel
{
    protected $collection;

    public function __construct()
    {
        $mongo = new MongoDB();
        $db = $mongo->connect();

        $this->collection = $db->produk;
    }

    public function getAll()
    {
        return $this->collection->find()->toArray();
    }

    public function insert($data)
    {
        return $this->collection->insertOne($data);
    }

    public function getById($id)
    {
        return $this->collection->findOne([
            '_id' => new ObjectId($id)
        ]);
    }

    public function updateData($id, $data)
    {
        return $this->collection->updateOne(
            ['_id' => new ObjectId($id)],
            ['$set' => $data]
        );
    }

    public function deleteData($id)
    {
        return $this->collection->deleteOne([
            '_id' => new ObjectId($id)
        ]);
    }
}