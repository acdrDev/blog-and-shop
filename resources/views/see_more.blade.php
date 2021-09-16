@extends('layouts.layout')

@section('title', 'See More')
<body>
<div class="content">
@section('content')

<!------------------------------Creacion de Las Secciones------------------------------> 
<h2 class="section subtitle">{{$post->title}}</h2>
<section class="section">         
                <img src="{{asset($post->banner)}}">
                <p class="text">{{$post->content}}</p>
                <div class="section_publications"> <a href="{{url()->previous()}}"><button>Volver</button></a></div>
</section>
@endsection