@extends('layouts.layout')

@section('title', 'Inicio')

<body>
    <div class="content">
        @section('content')

            <!------------------------------Creacion de Las Secciones------------------------------>
            @foreach ($site_init as $site_inits)
            <h2 class="section subtitle">{{$site_inits->first_section_title}}</h2>
            <section class="section">
                <img src="{{$site_inits->url_path}}" alt="{{$site_inits->first_section_title}}">
                <p class="text">{!!$site_inits->first_description!!}</p>
            </section>

            <h2 class="section subtitle">{{$site_inits->second_section_title}}</h2>
            <section class="section">
                <p class="text">{!!$site_inits->second_description!!}</p>
            </section>
            <h2 class="section subtitle">Redes Sociales</h2>
            <section class="section">
                <div class="section_redes">
                    <img src="img/Img_Section_1.png"><a href="#">{{$site_inits->whatsapp}}</a>
                    <img src="img/Img_Section_2.png"><a href="#">{{$site_inits->facebook}}</a>
                    <img src="img/circle-twitter_icon-icons.com_68035.png"><a href="#">{{$site_inits->twitter}}</a>
                </div>
            </section>
            @endforeach
    </div>

    @endsection
