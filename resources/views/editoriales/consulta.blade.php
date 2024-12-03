@extends('dashboard')

@section('contenido')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   {{-- Incluye SweetAlert2 para manejar mensajes emergentes --}}
{{-- Muestra un mensaje de error/exito si existe en la sesión --}}
@if(session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: '{{ session('error') }}',
        });
    </script>
@endif

@if(session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Éxito',
            text: '{{ session('success') }}',
        });
    </script>
@endif
<a href='/editorial/create'>
    <button type="button" class="btn btn-success">Registrar Editorial</button>
</a> <br><br>

<table class="table table-success table-striped">
    <thead>
        <th scope="col">Nombre Editorial</th>
        
        <th scope="col">Acciones</th>
    </thead>
    <tbody>
        @foreach ($editorial as $editorial)
        <tr>
            <td>{{ $editorial->Nombre_editorial }}</td>
            
            
            <td>
                <div class="row align-items-start">
                    <div class="col">
                        <a href='/editorial/{{$editorial->id}}/edit' class="btn btn-primary" href="#" role="button">Editar</a>
                        </div>
                    <div class="col">
                        <form action='/editorial/{{ $editorial->id }}' method="POST">
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
