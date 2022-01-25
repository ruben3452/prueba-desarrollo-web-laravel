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
            <label for="sn" class="form-label">sn</label>
            <input type="text" class="form-control mb-2" name="sn" id="exampleFormControlInput1" placeholder="sn">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control mb-2" name="nombre" id="exampleFormControlInput1" placeholder="nombre">
            <label for="peso" class="form-label">peso</label>
            <input type="text" class="form-control mb-2" name="peso" id="exampleFormControlInput2" placeholder="peso">
            <label for="precio" class="form-label">precio</label>
            <input type="text" class="form-control mb-2" name="precio" id="exampleFormControlInput3" placeholder="precio">
            <label for="unidad" class="form-label">unidad</label>
            <input type="text" class="form-control mb-2" name="unidad" id="exampleFormControlInput3" placeholder="unidad">
           
            </select>
            <input type="submit" value="Crear producto" class="btn btn-primary my-2" />
        </div>
        </form>
        <div >

     
        @foreach ($products as $product)
        
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('products-edit', ['id' => $product->id]) }}">{{ $product->nombre }} </a>
                
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('products-destroy', [$product->id]) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </div>
            </div>
        </div>    
        @endforeach
    
    </div>  
        
       
    </div>
       
    </div>
    @endsection