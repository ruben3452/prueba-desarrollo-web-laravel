@extends('app')

@section('content')
    <div class="container w-25 border p-4 mt-4">
        <div class="row mx-auto">
        <form  method="POST" action="{{ route('customers-update', ['id' => $customer->id]) }}"> 
        @method('PATCH')
        @csrf
        
        @if (session('succes'))
            <h6 class="alert alert-success">{{session('success')}}</h6>
            
        @endif

        @error('nombre')
        <h6 class="alert alert-danger">{{ $message }}</h6>
        @enderror
        
       
        
        <div class="mb-3">
            <label for="nombre" class="form-label">nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $customer->nombre }}" >
            <label for="documentoid" class="form-label">documentoid</label>
            <input type="text" name="documentoid" class="form-control" value="{{ $customer->documentoid }}" >
            <label for="correo" class="form-label">correo</label>
            <input type="text" name="correo" class="form-control" value="{{ $customer->correo }}" >
            
        </div>
  
            <button type="submit" class="btn btn-primary">Actualizar usuario</button>
        </form>

</div>
</div>
@endsection    