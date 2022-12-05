<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante1;


class PagesController extends Controller
{
    public function fnIndex(){
        return view('welcome');
    }

    public function fnEstDetalle($id){

        $xDetAlumnos = Estudiante1::findOrFail($id);
        return view('Estudiante.pagDetalle', compact('xDetAlumnos'));
    }

    public function fnEstActualizar($id){

        $xActAlumnos = Estudiante1::findOrFail($id);
        return view('Estudiante.pagActualizar', compact('xActAlumnos'));
    }
    
    public function fnEliminar(Request $request, $id){

        $deleteAlumno = Estudiante1::findOrFail($id);
        $deleteAlumno->delete();

        return back()->with('msj','Se elimnino con éxito...');              //Regresar
    }


    public function fnUpdate(Request $request, $id){

        $xUpdateAlumnos = Estudiante1::findOrFail($id);

        //return $request->all();

        $xUpdateAlumnos->codEst = $request->codEst;
        $xUpdateAlumnos->nomEst = $request->nomEst;
        $xUpdateAlumnos->apeEst = $request->apeEst;
        $xUpdateAlumnos->fnaEst = $request->fnaEst;
        $xUpdateAlumnos->turMat = $request->turMat;
        $xUpdateAlumnos->semMat = $request->semMat;
        $xUpdateAlumnos->estMat = $request->estMat;
        
        $xUpdateAlumnos->save();
        
        //return view('pagLista');  //Pasar a página lista
        return back()->with('msj','Se actualizo con éxito...');              //Regresar
        //created_at  updated_at
    }



    public function fnRegistrar(Request $request){

        $request ->validate([
            'codEst' => 'required',
            'nomEst' => 'required',
            'apeEst' => 'required',
            'fnaEst' => 'required',
            'turMat' => 'required',
            'semMat' => 'required',
            'estMat' => 'required'
        ]);


        //return $request->all();
        $nuevoEstudiante = new Estudiante1;
        $nuevoEstudiante->codEst = $request->codEst;
        $nuevoEstudiante->nomEst = $request->nomEst;
        $nuevoEstudiante->apeEst = $request->apeEst;
        $nuevoEstudiante->fnaEst = $request->fnaEst;
        $nuevoEstudiante->turMat = $request->turMat;
        $nuevoEstudiante->semMat = $request->semMat;
        $nuevoEstudiante->estMat = $request->estMat;
        
        $nuevoEstudiante->save();
        
        //return view('pagLista');  //Pasar a página lista
        return back()->with('msj','Se registro con éxito...');              //Regresar
        //created_at  updated_at
    }

    public function fnLista(){

        $xAlumnos = Estudiante1::paginate(4);
        return view('dashboard', compact('xAlumnos'));
    }

    public function fnGaleria($numero=0){
        $valor = $numero;
        $otro  = 25;
        return view('pagGaleria', compact('valor','otro'));
    }
}
