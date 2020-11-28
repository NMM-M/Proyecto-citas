<?php

namespace App\Http\Controllers\Admin;

use App\Specialty;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
class SpecialtyController extends Controller
{
    //
    public function index()
    {
        $specialties = Specialty::all();
        return view('specialties.index', compact('specialties'));
    }
    private function performValidation(Request $request){        
        $rules = [
            'name' => ' required|min:3',
            'description => required'
        ];
        $messages = [
            'name.required' => 'Es necesario ingresar un nombre.',
            'name.min' => 'El nombre debe tener como  minimo 3 caracteres.'
        ];
        $this->validate($request, $rules, $messages);
    }
    public function create()
    {
        return view('specialties.create');
    }
    public function edit(Specialty $specialty){
        
        return view('specialties.edit', compact('specialty'));
    }  
    public function store(Request $request)    {
        //dd($request->all());  para ver los parametros
        $this->performValidation($request);

        $specialty = new Specialty();
        $specialty->name =  $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save(); // insert bd

        $notification = 'La especialidad se ha registrado correctamente.';
        return redirect('/specialties')->with(compact('notification'));
    }
    
    public function update(Request $request, Specialty $specialty)
    {
        $this->performValidation($request);

        $specialty->name =  $request->input('name');
        $specialty->description = $request->input('description');
        $specialty->save(); // Actualizacion en bd

        $notification = 'La especialidad'.$specialty->name.' Se ha modificado correctamente.';
        return redirect('/specialties')->with(compact('notification'));

    }
    
    public function destroy(Specialty $specialty)
    {
        $deleteSpecialty = $specialty->name;
        $specialty->delete();
        $notification = 'La especialidad '.$deleteSpecialty.' Se ha eliminado correctamente.';
        return redirect('/specialties')->with(compact('notification')); 
    }
}