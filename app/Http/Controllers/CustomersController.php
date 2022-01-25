<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomersController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'nombre' =>'required|min:3',
            'documentoid' =>'required|min:3',
            'correo' =>'required|min:3'
        ]); 

        $customer = new Customer;
        $customer->nombre = $request->nombre;
        $customer->documentoid = $request->documentoid;
        $customer->correo = $request->correo;
        $customer->save();

        return redirect()->route('customers')->with('success', 'usuario creado correctamente');
        
    }
    public function index(){
        $customers =Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }

    public function show($id){
       $customer =Customer::find($id);
       return view('customers.show', ['customer' => $customer]);
   }

   public function update(Request $request, $id){
       $customer =Customer::find($id);
       $customer->nombre = $request->nombre;
        $customer->documentoid = $request->documentoid;
        $customer->correo = $request->correo;
       $customer->save();
       return redirect()->route('customers')->with('success', 'usuario actualizados');
   }

   public function destroy($id){
       $customer =Customer::find($id);
       $customer->delete();
       return redirect()->route('customers')->with('success', 'usuario deleted successfully');
   }
}
