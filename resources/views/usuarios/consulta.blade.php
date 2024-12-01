@extends('dashboard')

@section('contenido')
<a href='/usuario/create'>
    <button type="button" class="btn btn-success">Registrar Usuario</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">Nombre</th>
        <th scope="col">Apellido Paterno</th>
        <th scope="col">Apellido Materno</th>
        <th scope="col">Teléfono</th>
        <th scope="col">Dirección</th>
        <th scope="col">Sexo</th>
       
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->apellidoPat }}</td>
            <td>{{ $usuario->apellidoMat }}</td>
            <td>{{ $usuario->telefono }}</td>
            <td>{{ $usuario->direccion }}</td>
            <td>{{ $usuario->sexo  }}</td>
           
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/usuario/{{$usuario->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/usuario/{{ $usuario->id }}' method="POST">
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
