<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ ('BIBLIOTECA') }}
        </h2>
    </x-slot>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!--AQUI COLOCAMOS LO QUE ES EL MENSAJE DE LA EXCEPCION PARA LAS LLAVES FORANEAS CUANDO SEAN ELIMINADAS
                    O CUANDO SE QUIERAN BORRAR CAMPOS QUE TENGAN RELACION CON OTRAS TABLAS-->
                    @if (session('success'))
                    <div class="alert alert-success">
                    {{ session('success') }}0
                    </div>
                    @endif

                    @if (session('error'))
                    <div class="alert alert-danger">
                    {{ session('error') }}
                    </div>
                    @endif
                    <div style="background-color: #d19f6c; ">
                    @yield('contenido')

                    <h1>SISTEMA DE GESTION DE BIBLIOTECA </h1>               
                    <div id="screenshot-container" class="relative flex w-full flex-1 items-stretch">
                        
                        <br>
                        <img
                            src="https://st3.depositphotos.com/25067502/32711/v/450/depositphotos_327115254-stock-illustration-library-book-shelves-cartoon-vector.jpg"
                            alt="Laravel documentation screenshot"
                            class="aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.06)] dark:hidden"
                            onerror="
                                document.getElementById('screenshot-container').classList.add('!hidden');
                                document.getElementById('docs-card').classList.add('!row-span-1');
                                document.getElementById('docs-card-content').classList.add('!flex-row');
                                document.getElementById('background').classList.add('!hidden');
                            "
                        />
                        <img
                            src="https://laravel.com/assets/img/welcome/docs-dark.svg"
                            alt="Laravel documentation screenshot"
                            class="hidden aspect-video h-full w-full flex-1 rounded-[10px] object-top object-cover drop-shadow-[0px_4px_34px_rgba(0,0,0,0.25)] dark:block"
                        />
                        <div
                            class="absolute -bottom-16 -left-16 h-40 w-[calc(100%+8rem)] bg-gradient-to-b from-transparent via-white to-white dark:via-zinc-900 dark:to-zinc-900"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
