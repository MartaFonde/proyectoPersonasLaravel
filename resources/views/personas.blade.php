@extends('layouts.app') 
@include("partials.errors")
@section('content') 
<div class="container">     
    <div class="row justify-content-center">         
        <div class="col-md-8">             
            <div class="card"> 
                <div class="card-header">Crear una nueva persona</div> 
                <div class="card-body">                     
                    <form method="POST" action="{{route('store')}}">  
                        @csrf                         
                        <div class="form-group">                             
                            <label for="nombre">Nombre</label>                             
                            <input type="text" class="form-control" name="nombre"/>                             
                            <label for="direccion">Dirección</label>                             
                            <input type="text" class="form-control" name="direccion"/>                             
                            <label for="telefono">Teléfono</label>                             
                            <input type="text" class="form-control" name="telefono"/>     
                            <label for="telefono">Email</label>                             
                            <input type="text" class="form-control" name="email"/>                         
                        
                        </div>                         
                        <input type="submit" class="btn btn-block btn-dark" value="Añadir un nueva persona">                     
                    </form>                 
                </div>             
            </div>         
        </div>     
    </div> 
</div> 
@endsection