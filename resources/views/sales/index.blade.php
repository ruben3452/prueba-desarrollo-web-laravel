@extends('app')

@section('content')
    
<div class="container w-25 border p-4">
    <div class="row mx-auto">
    <form  method="POST" action="{{route('products')}}">
        @csrf
        
        <div class="mb-3 col">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
           
        </div>
        </form>
        <div >

        



<select class="selectpicker form-control" data-live-search="true" title="Select Client">

    @foreach ($products as $product)
   
   
        <option href="{{ route('products-edit', ['id' => $product->id]) }}">{{ $product->nombre}}</option>
     @endforeach 
</select>

        @foreach ($sales as $sale)
        
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('products-edit', ['id' => $product->id]) }}">{{ $product->nombre }} </a>
                
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('', [$sale->id]) }}" method="POST">
                    <select class="form-select" aria-label="Default select example" >
                   
                        <option selected>Open this select menu</option>
                        <option value="{{ route('products-edit', ['id' => $product->id]) }}">{{ $product->nombre }}</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>

                    <div class="form-group">
    
                        @csrf
                        <button class="btn btn-danger btn-sm">agregar</button>
                    </form>
                </div>
            </div>
        </div>    
        @endforeach
    
    </div>  
        
       
    </div>
       
    </div>
    @endsection