@extends('dashboard')

@section('contenido')
<div class="text-center">
    <h2>Edición de Prestamos</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/prestamo/{{$prestamo->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    @include('prestamos.formulario')
@endsection


