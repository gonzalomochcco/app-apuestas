@extends('layouts.main')

@section('pageTitle' , 'Panel administrativo')

@section('sectionContent')
    
    <div class="container-fluid">

        <div class="">
            <br>
            <h3> ! Hola <b>{{auth()->user()->information->name}}</b> ! Bienvenido/a a tu Panel de Aministrativo. </h3>   
            <br>             
        </div>

        <div class="card border-0 p-4 bg-white">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Panel principal de reportes</h5>
                <p class="mb-0"> Cuando tengamos registros listos se mostrarán aquí </p>
            </div>
        </div>
    </div>
    
@endsection