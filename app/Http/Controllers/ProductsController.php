<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'sn' =>'required|min:3',
            'nombre' =>'required|min:3',
            'peso' =>'required|min:3',
            'precio' =>'required|min:3',
            'precio' =>'required|min:1'
        ]); 

        $product = new Product;
        $product->sn = $request->sn;
        $product->nombre = $request->nombre;
        $product->peso = $request->peso;
        $product->precio = $request->precio;
        $product->unidad = $request->unidad;
        $product->save();

        return redirect()->route('products')->with('success', 'Producto creado correctamente');
        
    }
    public function index(){
        $products =Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function show($id){
       $product =Product::find($id);
       return view('products.show', ['product' => $product]);
   }

   public function update(Request $request, $id){
       $product =Product::find($id);
       $product->sn = $request->sn;
       $product->nombre = $request->nombre;
        $product->peso = $request->peso;
        $product->precio = $request->precio;
        $product->unidad = $request->unidad;
       $product->save();
       return redirect()->route('products')->with('success', 'productos actualizados');
   }

   public function destroy($id){
       $product =Product::find($id);
       $product->delete();
       return redirect()->route('products')->with('success', 'Product deleted successfully');
   }
}
