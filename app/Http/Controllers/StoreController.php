<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;

class StoreController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	//dd($products);
    	return view('store.index', compact('products'));
    }

    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	//dd($product);

    	return view('store.show', compact('product'));
    }

    public function categorias(){
        $categorias = Category::all();
        return view('categorias.categorias', compact('categorias'));

    }
}
