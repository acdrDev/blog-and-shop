@extends('layouts.layout')

@section('title', 'galeria ver mas')

@section('content')


    <section class="section see_more">
        <img src="{{ $product->url_path }}">
        <div>
            <div>
                <h2 class="subtitle">{{ $product->title }}</h2>
                <div class="text">{!! $product->description!!}</div>
            </div>
            <div class="see_more-buttoms section_publications ">
                <a href="{{ url()->previous() }}"><button>Volver</button></a>
                <a href="#"><button>Descargar</button></a>
            </div>
        </div>
    </section>
@endsection
