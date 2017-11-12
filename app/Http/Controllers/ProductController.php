<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\{Product, User};

class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}

	public function index(Request $request)
	{
		$products = $request->user()->favouriteProducts()->paginate(10);

		return view('fav', compact('products'));
	}

	public function show(Product $product)
	{
		return view('show', compact('product'));
	}

    public function store(Request $request, Product $product)
    {
    	$request->user()->favouriteProducts()->syncWithoutDetaching([$product->id]);

    	return back();
    }

    public function destroy(Request $request, Product $product)
    {
    	$request->user()->favouriteProducts()->detach($product);

    	return back();
    }
}
