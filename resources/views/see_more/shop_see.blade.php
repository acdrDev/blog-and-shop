@extends('layouts.layout')

@section('title', 'Tienda ver mas')

@section('content')


<section class="section see_more">         
                <img src="{{$product->url_path}}">
                <div>
                <h2>{{$product->title}}</h2>
                <p class="text">{{$product->description}}</p>
                <div class="section_publications"> 
                  <a href="{{url()->previous()}}"><button>Volver</button></a>
                  <button>Comprar</button>
                </div>
                </div>
</section>
@endsection
