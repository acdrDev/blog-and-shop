@extends('layouts.layout')

@section('title', 'galeria ver mas')

@section('content')


<section class="section see_more">         
                <img src="{{$product->url_path}}">
                <div>
                <div class="information">
                  <h2>{{$product->title}}</h2>
                <div class="text">{!!$product->description!!}</div>
                </div>               
                <div class="section_publications see_more-buttoms"> 
                  <a href="{{url()->previous()}}"><button>Volver</button></a>
                  <a href="#"><button>Descargar</button></a>
                </div>
                </div>
</section>
@endsection
