<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = Product::all();
        //\Log::info("acdss");
        return view("products.index", ["products" => $products]);
    }

    public function create() {
        return view("products.create");
    }

    public function store(Request $request, Product $product) {
       $request->validate(
            [
                "name" => ["required","min:5","max:30"],
                "description" => ["required","min:5","max:255"],
                "price" => ["required","numeric"],
                "image" => ["required","image", "max:10240"],
            ],
            );
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;

        $image = $request->file('image');
        $fileName = time() - '_' - $image->getClientOriginalName();
        $image->move(public_path('images'), $fileName);

        $product->imageURL = '/images/'.$FileName;

        $product->save();
        
        return redirect("/products");

    }
}
