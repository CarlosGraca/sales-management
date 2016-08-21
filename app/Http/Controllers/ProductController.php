<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
//use Illuminate\Http\Request;
use Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Provider;
use App\Models\Unit;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::all();

        if (Request::wantsJson()) {
            return $products;
        } else {
            return view('products.index',compact('products'));
        } 
    }

    public function create(){
        $product = new Product();
        $categories = Category::lists('name','id')->all();
        $brands = Brand::lists('name','id')->all();
        $providers = Provider::lists('name','id')->all();
        $units = Unit::lists('name','id')->all();
        return view('products.create',compact('product','categories','brands','units','providers'));
    }

    //armazenamento novo registo
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->all());
        session()->flash('flash_message','Product was stored with success');

        if (Request::wantsJson()){
            return $product;
        }else{
            return redirect('products.index');
        }
    }

    //mostrar um registo especifico
    public function show(Product $product)
    {
        if (Request::wantsJson()){
            return $product;
        }else{
            return view('products.show',compact('product'));
        }
    }
    
    public function edit(Product $product)
    {       
        $categories = Category::Lists('name','id')->all();
        $brands = Brand::Lists('name','id')->all();
        $providers = Provider::Lists('name','id')->all();
        $unit = Unit::Lists('name','id')->all();
        return view('products.edit',compact('product','categories','brands','units','providers'));   
    }

    //update
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->all());
        session()->flash('flash_message','Product was update with success');

        if (Request::wantsJson()){
            return $product;
        }else{
            return redirect('products');
        }
    }

    //delete
    public function destroy(Product $product)
    {
        $deleted= $product->delete();
        session()->flash('flash_message','Product was removed with success');

        if (Request::wantsJson()){
            return (string) $deleted;
        }else{
            return redirect('products');
        }
    }
}
