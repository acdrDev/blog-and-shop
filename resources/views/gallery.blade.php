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