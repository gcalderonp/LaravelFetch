@extends('base')

@section('token')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')



    <div class="container mt-5">
        <a class="btn btn-success mb-3" href="{{ route('clienteIndex') }}">Atras</a>

        <form id="clienteForm" class="border border-2 rounded p-3" action="clienteStore" method="POST">

            <div class="form-group mb-3">
                <label for="name">Nombre</label>
                <input autocomplete="off" name="name" class="form-control" placeholder="Ingrese Nombre"
                    type="text">

            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input autocomplete="off" name="age" class="form-control" placeholder="Ingrese Edad" type="number">
            </div>

            <button type="submit" class="btn btn-success mt-4">Guardar</button>

        </form>

    </div>

    <div id="alert">

    </div>

    <script src="{{ asset('app.js') }}"></script>


@endsection
