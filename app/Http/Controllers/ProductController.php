<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
  public function index() {
    $getProducts = Product::all();
    return $getProducts;
  }

  public function show($id) {
    $product = Product::find($id);
    return $product;
  }

  public function store(Request $req) {
    $products = new Product();
    $products->title = $req->title;
    $products->description = $req->description;
    $products->price = $req->price;
    $products->published_by = $req->published_by;

    $products->save();
    
    return $products;
  }

  public function update(Request $req, $id){
    $product = Product::find($id);
    $product->update($req->all());

    return $product;
  }

  public function destroy($id){
    $product = Product::find($id);
    $product->delete();
    
    return $product;
  }
}
