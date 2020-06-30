<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(5);
        return view('products.Index',['products'=>$products]);

    }
    public function home(){
        $products = Product::all();
        return view('homepages.Home',['products'=>$products]);

    }
    public function details($id){
        $product = Product::where('id',$id)->first();
        return view('homepages.details',['product'=>$product]);
    }
    public function create(){
        return view('products.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' =>'required',
            'price'=>'required',
            'img'=>'required',
            'description'=>'required'
        ]);
        $product = new Product([
           'name'=>$request->get('name'),
            'price'=>$request->get('price'),
            'description'=>$request->get('description'),
            'img'=>$request->get('img')
        ]);
        $product->save();

        return redirect('/products')->with('success','Product Saved');
    }
    public function edit($id){
        $product = Product::find($id);
        return view('products.edit',['product'=>$product]);
    }

    public function show($id){
    $product = Product::where('id',$id)->first();
    return view('products.show',array('product'=>$product));
    }

    public function update(Request $request){
    $product = Product::Where('id',$request->id)->first();
        $product->id =$request->id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->img = $request->img;
        $product->save();
        return redirect('/products');
    }
    public function destroy($id){
        Product::where('id',$id)->delete();
        return "Deleted Product";
    }
}
