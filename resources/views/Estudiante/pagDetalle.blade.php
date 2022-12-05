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
    <h1 class="display-4">Página de detalle </h1>
@endsection

@section('seccion')
    
    <div class="btn btn-info d-grid display-3">Información detallada del estudiante</div>

    <p>Id:          {{ $xDetAlumnos -> id }} </p> 
    <p>Código    :  {{ $xDetAlumnos -> codEst }} </p> 
    <p>Apellidos y nombres: {{ $xDetAlumnos -> apeEst }}, {{ $xDetAlumnos -> nomEst }} </p> 
    <p>Fecha Nacimiento:    {{ $xDetAlumnos -> fnaEst }} </p> 
    <p>Turno:       {{ $xDetAlumnos -> turMat }} </p> 
    <p>Semestre:    {{ $xDetAlumnos -> semMat }} </p> 
    <p>Estado de matric.:   {{ $xDetAlumnos -> estMat }} </p> 

    <div class="btn btn-info d-grid display-3">...</div>
    
@endsection

            </div>
        </div>
    </div>
</x-app-layout>
