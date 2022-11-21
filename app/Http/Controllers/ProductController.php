<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $produtcs = $this->product::all();
        return response()->json($produtcs);
    }

    public function store(Request $request)
    {
        $request->validate($this->product->rules());

        $image = $request->file('image');
        $imame_urn = $image->store('images', 'public');

        $product = $this->product->create([
            'name' => $request->name,
            'image' => $imame_urn,
            'category' => $request->category,
            'description' => $request->description
        ]);

        return response()->json($product, 201);
    }
}
