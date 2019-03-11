<?php

namespace App\Http\Controllers;

use App\Product;
use App\Section;
use Illuminate\Http\Request;
use Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.dashboard.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('admin.dashboard.product.create')->with('sections', $sections);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $formInput=$request->except('image');
        $this->validate($request,[
            'name' =>'required',
            'price' =>'required',
            'section_id' =>'required',
            'image' =>'image|mimes:png,jpg,jpeg|max:20000',
        ]);
        $image=$request->image;
        if ($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;

        }
        Product::create($formInput);
        return \Illuminate\Support\Facades\Response::redirectTo('/admin/dashboard/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $sections = Section::all();
        $data = [
            'product'=>$product ,
            'sections'=>$sections,
        ];
        return view( 'admin.dashboard.product.update')->with($data);
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

        $formInput=$request->except('image');
        $this->validate($request,[
            'name' =>'required',
            'price' =>'required',
            'section_id' =>'required',
            'image' =>'image|mimes:png,jpg,jpeg|max:20000',
        ]);
        $image=$request->image;
        if ($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;

        }
        $product->update($formInput);
        return \Illuminate\Support\Facades\Response::redirectTo('/admin/dashboard/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return \Illuminate\Support\Facades\Response::redirectTo('/admin/dashboard/product');
    }
}
