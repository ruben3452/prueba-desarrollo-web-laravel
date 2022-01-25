@extends('app')

@section('content')
    
<div class="container w-25 border p-4">
    <div class="row mx-auto">
    <form  method="POST" action="{{route('customers')}}">
        @csrf
        
        <div class="mb-3 col">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        @if (session('success'))
                <h6 class="alert alert-success">{{ session('success') }}</h6>
        @endif
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" class="form-control mb-2" name="nombre" id="exampleFormControlInput1" placeholder="nombre">
            <label for="documentoid" class="form-label">documento</label>
            <input type="text" class="form-control mb-2" name="documentoid" id="exampleFormControlInput2" placeholder="documento">
            <label for="correo" class="form-label">correo</label>
            <input type="text" class="form-control mb-2" name="correo" id="exampleFormControlInput3" placeholder="correo">
           
            </select>
            <input type="submit" value="Crear producto" class="btn btn-primary my-2" />
        </div>
        </form>
        <div >
        @foreach ($customers as $customer)
        
            <div class="row py-1">
                <div class="col-md-9 d-flex align-items-center">
                    <a href="{{ route('customers-edit', ['id' => $customer->id]) }}">{{ $customer->nombre }} </a>
                
                </div>

                <div class="col-md-3 d-flex justify-content-end">
                    <form action="{{ route('customers-destroy', [$customer->id]) }}" method="POST">
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