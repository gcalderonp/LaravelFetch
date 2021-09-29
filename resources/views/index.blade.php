@extends('base')

@section('content')

    <div class="container mt-5">
        <table class="table">
            <thead>
                <a class="btn btn-success" href=" {{ route('ClienteCreate') }} ">Nuevo</a>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Edad</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clientes as $cliente)

                    <tr>
                        <th>{{ $cliente->id }}</th>
                        <td>{{ $cliente->Nombre }}</td>
                        <td>{{ $cliente->edad }}</td>
                        <td width='10px'><a class="btn btn-success btn-sm" href=" {{ route('clienteEdit', $cliente->id)}} ">Editar</a></td>
                        <td width='10px'><a class="btn btn-danger btn-sm" href="#">Eliminar</a></td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{ $clientes->links() }}
    </div>

@endsection
