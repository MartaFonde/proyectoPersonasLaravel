@extends('layouts.app') 
@section('content') 

<div class="container">     
    <div class="row justify-content-center">         
        <div class="col-md-8">             
            <div class="card"> 
                <div class="card-header">{{ __('Mostrar personas')}}</div> 
                <div class="card-body">                     
                    <table class = 'table'>
                        @if($personas->count())
                        <thread>
                            <tr>
                                <td>Nombre</td>
                                <td>Dirección</td>
                                <td>Teléfono</td>
                                <td>Email</td>
                            </tr>
                        </thread>
                        @endif
                        <tbody>
                            @foreach($personas as $persona)
                                <tr>
                                    <td>{{$persona->nombre}}</td>
                                    <td>{{$persona->direccion}}</td>
                                    <td>{{$persona->telefono}}</td>
                                    <td>{{$persona->email}}</td>
                                    @if(auth()->user()->rol==0)
                                        <td>
                                        <form method="POST" action="{{route('destroy',['id'=>$persona->id])}}">
                                        @method ("DELETE")
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Eliminar persona</button>
                                        </td>    
                                    @endif                                                         
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                
                    {{-- <form method="POST" action="{{route('store')}}">  
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
                    </form>                  --}}
                </div>             
            </div>         
        </div>     
    </div> 
</div> 
@endsection