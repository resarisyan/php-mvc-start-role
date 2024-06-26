<?php

namespace StarRole\PhpMvc\Controller;

use StarRole\PhpMvc\Controller\Controller;
use StarRole\PhpMvc\Model\Product;

class HomeController extends Controller
{
    private $modelProduct;
    public function __construct()
    {
        $this->modelProduct = new Product();
    }

    public function index()
    {
        $data['products'] = $this->modelProduct->getAll();
        $this->view('home/index', $data);
    }

    public function test()
    {
        echo 'Test';
    }
}
