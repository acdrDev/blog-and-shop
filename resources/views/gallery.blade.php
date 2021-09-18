@extends('layouts.layout')

@section('title','Galeria')
    
@section('content')

      <!----------------------------Creacion de Las Secciones-------------------------------->
<div class="justify_section">
<div class="shot_justify">
    <h2 class="section subtitle">Tienda</h2> 
    <section class="section shot_content">
        @foreach ($products as $product)
            <div class="products">
                <img src="{{asset($product->img)}}" alt="{{$product->title}}">
                <p>{{$product->title}}</p>
                <h3>{{$product->price}}</h3>
                <button id="open">Ver mas</button>
                
            </div> 
            <div class="window_background" id="windowBrackground">
                <div class="new-window" id="newWindow">
                    <h2 class="subtitle">{{$product->title}}</h2>
                    <img src="{{$product->img}}" alt="{{$product->title}}">
                    <h3>{{$product->price}}</h3>
                    <p class="text">{{$product->description}}</p>
                    <div class="section_publications"><button id="close">Volver</button></div>
                </div>
            </div>    
            @endforeach
            
            </section>
</div>
        <!---------------------------Elavoracion Del Aside------------------------------------->
        <div class="aside_justify">
            
            @include('layouts.aside')
                </div> 
        
            </div> 
            
        @endsection
