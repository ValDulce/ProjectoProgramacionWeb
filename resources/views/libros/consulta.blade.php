@extends('dashboard')

@section('contenido')
<a href='/libro/create'>
    <button type="button" class="btn btn-success">Registrar libro</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">titulo</th>
        <th scope="col">año</th>
        <th scope="col">autor</th>
        <th scope="col">categoria</th>
        <th scope="col">editorial</th>
      
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($libros as $libro)
        <tr>
            <td>{{ $libro->titulo }}</td>
            <td>{{ $libro->año }}</td>
            <td>{{ $libro->autorf->nombre }}</td>
            <td>{{ $libro->categoriaf->tipo }}</td>
            <td>{{ $libro->editorialf->Nombre_editorial }}</td>
            
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/libro/{{$libro->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/libro/{{ $libro->id }}' method="POST">
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
