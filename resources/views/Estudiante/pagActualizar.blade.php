<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl  sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <!-- <x-jet-welcome />  -->

@extends('pagPlantilla') 

@section('titulo')
    <h1 class="display-4">Página de actualizar </h1>
@endsection

@section('seccion')
    
    <h3>Detalle </h3>

    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj') }}
        </div>
    @endif

    <div class="btn btn-warning d-grid fs-5 mb-2 bt-2">Actualizar datos</div>

    <form action="{{ route('Estudiante.xUpdate', $xActAlumnos->id)}}" method="post" class="d-grid gap-2">
        @method('PUT')
        @csrf

        @error('codEst')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('nomEst')
            <div class="alert alert-danger">
                El nombre es requerido 
            </div>
        @enderror

        @if($errors->has('apeEst'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                El <strong>apellido</strong> es requerido 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="text" name="codEst" placeholder="Código" value="{{ $xActAlumnos->codEst }}" class="form-control mb-2">
        <input type="text" name="nomEst" placeholder="Nombres" value="{{ $xActAlumnos->nomEst }}" class="form-control mb-2">
        <input type="text" name="apeEst" placeholder="Apellidos" value="{{ $xActAlumnos->apeEst }}" class="form-control mb-2">
        <input type="text" name="fnaEst" placeholder="Fecha de nacimiento" value="{{ $xActAlumnos->fnaEst }}" class="form-control mb-2">
        <select name="turMat" class="form-control mb-2">
            <option value="" @if ($xActAlumnos->turMat == "") {{ "SELECTED" }} @endif >Seleccione...</option>
            <option value="1" @if ($xActAlumnos->turMat == 1) {{ "SELECTED" }} @endif >Turno día(1)</option>
            <option value="2" @if ($xActAlumnos->turMat == 2) {{ "SELECTED" }} @endif >Turno noche(2)</option>
            <option value="3" @if ($xActAlumnos->turMat == 3) {{ "SELECTED" }} @endif >Turno tarde(3)</option>
        </select>
        <select name="semMat" class="form-control mb-2">
            <option value="" @if ($xActAlumnos->semMat == "") {{ "SELECTED" }} @endif >Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}" @if ($xActAlumnos->semMat == $i) {{ "SELECTED" }} @endif > Semestre {{$i}}</option>
            @endfor
        </select>
        <select name="estMat" class="form-control mb-2">
            <option value="" @if ($xActAlumnos->estMat == "") {{ "SELECTED" }} @endif >Seleccione...</option>
            <option value="1" @if ($xActAlumnos->estMat == 1) {{ "SELECTED" }} @endif >Activo</option>
            <option value="0" @if ($xActAlumnos->estMat == 0) {{ "SELECTED" }} @endif >Inactivo</option>
        </select>
        <button class="btn btn-warning" type="submit">Actualizar</button>
        <hr>
    </form>
    
@endsection

            </div>
        </div>
    </div>
</x-app-layout>
