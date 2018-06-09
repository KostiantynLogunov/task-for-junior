<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $current_category = false;
        $products = Product::paginate(5);
        if (is_numeric($request->category_id)) {
            $current_category = Category::find($request->category_id);
            $products = Product::where('category', $request->category_id)->paginate(5);
        }



        return view('welcome', [
            'current_category' => $current_category,
            'categories' => Category::all(),
            'products' => $products
        ]);
    }

    public function show($product_id)
    {
        $product = Product::find($product_id);

        return view('show', [
            'categories' => Category::all(),
            'product' => $product
        ]);
    }

    public function left(Request $request)
    {

        $current_category = false;
        $products = Product::paginate(5);
        if (is_numeric($request->category_id)) {
            $current_category = Category::find($request->category_id);
            $products = Product::where('category', $request->category_id)->paginate(5);
        }



        return view('slider', [
            'current_category' => $current_category,
            'categories' => Category::all(),
            'products' => $products
        ]);
    }

    public function right(Request $request)
    {

        $current_category = false;
        $products = Product::paginate(5);
        if (is_numeric($request->category_id)) {
            $current_category = Category::find($request->category_id);
            $products = Product::where('category', $request->category_id)->paginate(5);
        }



        return view('r-slider', [
            'current_category' => $current_category,
            'categories' => Category::all(),
            'products' => $products
        ]);
    }
}
