@extends('dashboard')

@section('contenido')
<a href='/autor/create'>
    <button type="button" class="btn btn-success">Registrar Autores</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Sexo</th>
        <th scope="col">Edad</th>
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($autores as $autor)
        <tr>
            <td>{{ $autor->nombre }}</td>
            <td>{{ $autor->apellidoPat }}</td>
            <td>{{ $autor->apellidoMat }}</td>
            <td>{{ $autor->sexo }}</td>
            <td>{{ $autor->edad }}</td>
            
            
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/autor/{{$autor->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/autor/{{ $autor->id }}' method="POST">
                            @csrf
                            @method('DELETE')
                            <button onClick="return confirm('¿Estas seguro?')" class="btn btn-danger" type="submit">
                                Borrar
                            </button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
