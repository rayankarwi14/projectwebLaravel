<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Produit;

class ControllerProduit extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Produit::inRandomOrder()->take(8)->get();

        return view('product_list')->with('products',$products);
    }

    
}
