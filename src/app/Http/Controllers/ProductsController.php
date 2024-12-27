<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use Illuminate\Support\Facades\DB;


class ProductsController extends Controller
{
    public function index()
    {

        $products = DB::table('products')->select('name', 'price', 'image')->get();

        return view('index', compact('products'));
    }




    public function search(Request $request)
    {
    $query = $request->input('query');
    $sort = $request->input('sort');


    $products = Product::query();


    if ($query) {
        $products->where('name', 'LIKE', '%' . $query . '%');
    }


    if ($sort === 'price_desc') {
        $products->orderBy('price', 'desc');
    } elseif ($sort === 'price_asc') {
        $products->orderBy('price', 'asc');
    }


    $products = $products->get();


    return view('search', compact('products', 'query', 'sort'));
    }





    public function register()
    {

    $seasons = Season::all();


    return view('register', compact('seasons'));
    }




    public function productid()
    {


    return view('productid');
    }



    public function update()
    {


    return view('update');
    }

    public function delete()
    {


    return view('delete');
    }

}


