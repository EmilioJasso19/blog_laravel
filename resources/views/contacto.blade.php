@extends('layout')

@section('contenido')
    <h1>Contacto</h1>

<h1>Contact</h1>
<h2>Text me</h2>
@if( session()->has('info') )
    <h3>{{ session('info') }}</h3>
@else
<form method="POST" action="contacto">
    {!! csrf_field() !!}
    <label for="nombre">
        Nombre
        <input type="text" name="nombre" value="{{ old('nombre') }}">
        {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
    </label>

    <label for="email">
        Email
        <input type="email" name="email" value="{{ old('email') }}">
        {!!  $errors->first('email', '<span class=error>:message</span>') !!}
    </label>

    <label for="mensaje">
        Mensaje
        <textarea name="mensaje">{{ old('mensaje') }}</textarea>
        {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
    </label>

    <input type="submit" value="Enviar">
</form>
@endif
@stop
