<?php

namespace App\Http\Controllers;

use App\Models\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request){ 
        //Persona::create($request->all()); //Cojo todos los campos         
        $this->validate(request(), [
            "nombre"=>"required",
            "direccion"=>"required",
            "telefono"=>"required|min:9",
            "email"=>"required"]);
        return back(); //después de guardar vuelvo al formulario    
    }

    public function show()
    {
        $persona = Persona::all();
        return view('show')->with('personas', $persona);
    }

    public function destroy($id)
    {
        if (request()->isMethod("DELETE")) {
            try {
                $libro = Persona::findOrFail($id);
                $libro->delete();
                return redirect(route("show"));
            } catch (Exception $ex) {
                dd($ex);
            }
        }
    }
}
