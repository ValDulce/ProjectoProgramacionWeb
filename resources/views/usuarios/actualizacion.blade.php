@extends('dashboard')

@section('contenido')
<!--MENSAJE DE VALIDACION , CON LAS MODIFICACIONES EN LOS METODOS STORE Y UPDATE DE USUARIOS-->

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="text-center">
    <h2>Edición de Usuarios</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/usuario/{{$usuario->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    @include('usuarios.formulario')
@endsection


