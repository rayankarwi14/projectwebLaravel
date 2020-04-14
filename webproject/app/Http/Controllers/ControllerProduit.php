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


     //affichage de la liste des produit 
    public function index()
    {   /** to get all table */
        $products = Produit::all();
        return view('product_list')->with('products',$products);
    }
    /**
     * Display a listing of the resource.

      * @return \Illuminate\Http\Response
     */

     

      // affichage de detai des produit 
      public function show($id){

       $products = Produit::where("id",$id)->first();
       return view('product_detail')->with("products",$products);
    }
    
}



