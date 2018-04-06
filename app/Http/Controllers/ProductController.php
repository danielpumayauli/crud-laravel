<?php

namespace DanielPumayauli\Http\Controllers;

use Illuminate\Http\Request;
use DanielPumayauli\Product;

class ProductController extends Controller
{
    public function index(){
    	$products = Product::orderBy('id', 'ASC')->paginate(10);
    	// return view('products.index')->with(compact('products'));
    	return view('products.index', compact('products'));
    }
    public function show($id){
    	$product = Product::find($id);
    	return view('products.show', compact('product'));
    }
    public function destroy($id){
    	$product = Product::find($id);
    	$product->delete();

    	return back()->with('info','El producto fue eliminado');
    }
}
