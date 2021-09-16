@extends('layouts.layout')

@section('title','Post')
    
      <!-----------------------------------Creacion de Las Secciones------------------------------------>
      @section('content')
          
   
<div class="justify_section">
<div class="section_shot_justify">
    @foreach ($posts as $post)
    <h2 class="section subtitle"> {{$post->title}}</h2>
    <section class="section">
        <div class="section_publications">
           <img src=" {{asset($post->banner)}}" alt="{{$post->title}}">
            <p>{{$post->content}}</p>
           <!-- <h3>Categoria: {$category->category}</h3>-->
            <button id="abrirVentana">Ver más</button>
        </div>
    </section>    
    @endforeach
</div>
 <!---------------------------------Elavoracion Del Aside-------------------------------------------->
 <div class="aside_justify">
    @include('layouts.aside')
</div> 
</div>   
    @endsection