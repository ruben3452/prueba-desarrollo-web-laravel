<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
class SalesController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            
            'documentoid' =>'required|min:3',
            'sn' =>'sn|min:3',
            'unidad' =>'unidad|min:3'

        ]); 

        $sale = new Customer;
        
        $sale->documentoid = $request->documentoid;
        $sale->sn = $request->sn;
        $sale->unidad = $unidad->sn;
        $sale->save();

        return redirect()->route('sales')->with('success', 'compra en el carrito');
        
    }
    public function index(){
        $sales =Sale::all();
        return view('sales.index', ['sales' => $sales]);
    }

   

    public function show($id){
       $sale =Sale::find($id);
       return view('sales.show', ['sale' => $sale]);
   }

   public function update(Request $request, $id){
       $sale =Customer::find($id);
       
        $sale->documentoid = $request->documentoid;
        $sale->sn = $request->sn;
        $sale->unidad = $request->unidad;
       $sale->save();
       return redirect()->route('sales')->with('success', 'compra actualizada');
   }

   public function destroy($id){
       $sale =Customer::find($id);
       $sale->delete();
       return redirect()->route('sales')->with('success', 'compra deleted successfully');
   }

}
