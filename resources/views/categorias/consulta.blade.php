@extends('dashboard')

@section('contenido')
<a href='/categoria/create'>
    <button type="button" class="btn btn-success">Registrar categoria</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">tipo</th>
        
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($categoria as $categoria)
        <tr>
            <td>{{ $categoria->tipo }}</td>
            
            
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/categoria/{{$categoria->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/categoria/{{ $categoria->id }}' method="POST">
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
