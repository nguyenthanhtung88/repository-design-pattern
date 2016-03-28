<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\ProductRepositoryInterface;

class ProductsController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $products = $this->productRepository->all();

        return $products;
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);

        return $product;
    }

}
