@extends('layouts.main')

@section('title', 'Exo Greetings')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-title">
                ¡Hola desde Exosfera! 🚀
            </h1>
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <p>Este es un módulo de ejemplo creado para demostrar cómo extender <strong>FreeScout</strong> sin tocar el código central.</p>
                    <p>Si estás viendo esto, significa que:</p>
                    <ul>
                        <li>Tu módulo está correctamente registrado.</li>
                        <li>El Service Provider está funcionando.</li>
                        <li>Las rutas están activas.</li>
                        <li>La vista se está cargando desde el módulo.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
