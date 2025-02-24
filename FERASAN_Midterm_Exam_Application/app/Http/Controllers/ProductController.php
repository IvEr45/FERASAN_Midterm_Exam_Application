<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        'Inception', 
        'The Dark Knight', 
        'Interstellar', 
        'The Matrix', 
        'Fight Club', 
        'The Shawshank Redemption', 
        'Pulp Fiction', 
        'The Lord of the Rings: The Fellowship of the Ring', 
        'The Godfather', 
       'Gladiator',
    ];

    public function index()
    {
        return view('products', ['products' => $this->products]);
    }
}