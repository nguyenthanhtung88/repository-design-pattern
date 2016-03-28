<?php

namespace App\Repositories\Redis;

use App\Repositories\Contracts\ProductRepositoryInterface;

class RedisProductRepository implements ProductRepositoryInterface
{
    public function all()
    {
        return 'Get all product from Redis';
    }

    public function find($id)
    {
        return 'Get single product by id: ' . $id;
    }
}
