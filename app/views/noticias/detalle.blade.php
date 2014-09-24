@extends('layout')

@section('contenido')
<article class="noticia">
    <h2>{{ $noticia->titulo }}</h2>
    <picture>
        <img src="{{ $noticia->image_url }}" alt=""/>
    </picture>
    <p>{{ $noticia->texto }}</p>
</article>

@stop