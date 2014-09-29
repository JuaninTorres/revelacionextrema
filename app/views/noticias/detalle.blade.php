@extends('layout')

@section('contenido')
<article class="noticia">
    <h2>{{ $noticia->titulo }}</h2>
    <div class="noticia-contenido">
        <picture>
            <img src="{{ $noticia->image_url }}" alt=""/>
        </picture>
        <p>{{ $noticia->texto }}</p>
    </div>
</article>

@stop