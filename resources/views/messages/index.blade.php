@extends('layout')

@section('contenido')
    <h1>Todos los mensajes</h1>

    <table width="100%" border="1">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Mensaje</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($messages as $message)
                <tr>
                    <td>
                        <a href="{{ route('messages.show', $message->id) }}">
                            {{ $message->nombre }}
                        </a>
                    </td>
                    <td>{{ $message->email }}</td>
                    <td>{{ $message->mensaje }}</td>
                    <td>
                        <a href="{{ route('messages.edit', $message->id) }}">Editar mensaje</a>
                        <form style="display: inline" action="POST" action="{{ route('messages.destroy', $message->id) }}">
                            {!! csrf_field() !!}
                            {!! method_field('DELETE') !!}
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection