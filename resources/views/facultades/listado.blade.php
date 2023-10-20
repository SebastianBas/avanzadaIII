
@extends('adminlte::page')

@section('title', 'Facultades')

@section('content_header')
    <h1>Listado de Facultades</h1>

@stop

@section('content')
    <div class="d-grid gap-2 d-md-block">
        <button class="btn btn-primary" type="button">Editar</button>
    </div>
    
    <table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Codigo</th>
        <th scope="col">Nombre</th>
        <th scope="col">Opcion</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>200</td>
        <td>Ingenieria</td>
        <td>
            <div class="d-grid gap-2 d-md-block">
                <button class="btn btn-primary" type="button">Editar</button>
                <button class="btn btn-primary" type="button">Eliminsr</button>
            </div>
        </td>
        </tr>
       
    </tbody>
    </table>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop




