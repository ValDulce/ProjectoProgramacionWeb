@extends('dashboard')

@section('contenido')
<div class="text-center">
    <h2>Edición de editorial</h2>
    <p class="lead">Completa los datos solicitados</p>
</div>
<div class="row justify-content-center my-5">
    <div class="col-lg-6">
      <form action="/editorial/{{$editorial->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
    @include('editoriales.formulario')
@endsection


