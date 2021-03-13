<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Validator;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('user_id', auth()->user()->id)->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request->all(),[
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'thumbnail' => 'required',
        ])->validate();

        if($request->hasFile('thumbnail')){
            $extension = ".".$request->thumbnail->getClientOriginalExtension();
            $name = basename($request->thumbnail->getClientOriginalName(), $extension).time();
            $profile_image_name = $name.$extension;
            $path = $request->thumbnail->storeAs('public', $profile_image_name);
            $product_data = array(
                'title' => $request->title,
                'user_id' => auth()->user()->id,
                'category_id' => $request->category,
                'price' => $request->price,
                'description' => $request->description,
                'thumbnail' => $profile_image_name
            );
            $product = Product::create($product_data);
        }
        return redirect()->route('user.product.index')->with('message','Product has been uploaded successfully...!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Validator::make($request->all(),[
            'title' => 'required',
            'price' => 'required',
            'category' => 'required',
            'thumbnail' => 'required',
        ])->validate();

        if($request->hasFile('thumbnail')){
            $extension = ".".$request->thumbnail->getClientOriginalExtension();
            $name = basename($request->thumbnail->getClientOriginalName(), $extension).time();
            $profile_image_name = $name.$extension;
            $path = $request->thumbnail->storeAs('public', $profile_image_name);
            $product_data = array(
                'title' => $request->title,
                'user_id' => auth()->user()->id,
                'category_id' => $request->category,
                'price' => $request->price,
                'description' => $request->description,
                'thumbnail' => $profile_image_name
            );
            $product = Product::where('id', $product->id)->update($product_data);
        }
        return redirect()->route('user.product.index')->with('message','Product has been uploaded successfully...!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
