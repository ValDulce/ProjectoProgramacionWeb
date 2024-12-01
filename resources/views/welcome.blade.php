<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <!-- Agregar estilos CSS o frameworks como Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        /* Fondo con gradiente */
        body {
            background: linear-gradient(135deg, #cfad8a, #a9825a);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Arial', sans-serif;
        }

        /* Contenedor del formulario */
        .card {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
        }

        .card-header {
            background-color: #a9825a;
            color: white;
            font-weight: bold;
        }

        .card-footer a {
            color: #a9825a;
            text-decoration: none;
        }

        .card-footer a:hover {
            text-decoration: underline;
        }

        /* Botón personalizado */
        .btn-primary {
            background-color: #a9825a;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d1a375;
        }

        /* Animación sutil en los campos de entrada */
        input:focus {
            border-color: #d1a171;
            box-shadow: 0 0 5px rgb(211, 143, 79);
        }
        .Titulo-Main{
            text-align: center;
            color: black;
            padding: 8%
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color:white;
            border-radius: 20px;
            border: 3px solid black;
            box-shadow: 2px 2px 2px black;
            margin-left:7%;
        }
        .Titulo-Main:hover{
            transform: scale(1.3);
            transition: 0.3s;
            
        }
        p{
            color:black;
            font-family: 'Arial', sans-serif;
        }
        .container:hover{
            transform: scale(1.1);
            transition: 0.3s;
            
        }
    </style>
</head>
<body>
    
    <div class="Titulo-Main">
        <b><h1>INICIA SESION O REGISTRATE</h1></b>
        <h2>Para conocernos</h2>
        <b><p>En esta Web se realizara una gestion de usuarios y control total de nuestra BIBLIOTECA
            para dar un grata experiencia a nuestros usuarios
        </p>
        </b>

    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Iniciar Sesión</h3>
                    </div>
                    <div class="card-body">
                        <!-- Mostrar mensajes de error -->
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Formulario de inicio de sesión -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Correo Electrónico</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" name="remember" id="remember" class="form-check-input">
                                <label for="remember" class="form-check-label">Recordarme</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('register') }}">¿No tienes una cuenta? Regístrate aquí</a>
                        <br>
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts opcionales -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
