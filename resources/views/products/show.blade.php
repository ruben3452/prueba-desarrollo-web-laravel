@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <div class="row mx-auto">
        <form  method="POST" action="{{ route('products-update', ['id' => $product->id]) }}"> 
        @method('PATCH')
        @csrf
        
        @if (session('succes'))
            <h6 class="alert alert-success">{{session('success')}}</h6>
            
        @endif

        @error('nombre')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        
        @error('peso')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        @error('precio')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        
        <div class="mb-3">
            <label for="sn" class="form-label">sn</label>
            <input type="text" name="sn" class="form-control" value="{{ $product->sn }}" >
            <label for="nombre" class="form-label">Nuevo nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $product->nombre }}" >
            <label for="peso" class="form-label">Nuevo peso</label>
            <input type="text" name="peso" class="form-control" value="{{ $product->peso }}" >
            <label for="precio" class="form-label">Nuevo precio</label>
            <input type="text" name="precio" class="form-control" value="{{ $product->precio }}" >
            <label for="unidad" class="form-label">unidad</label>
            <input type="text" name="unidad" class="form-control" value="{{ $product->unidad }}" >
            
        </div>
  
            <button type="submit" class="btn btn-primary">Actualizar producto</button>
        </form>

</div>
</div>
@endsection    