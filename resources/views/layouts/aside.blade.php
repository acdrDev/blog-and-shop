<section class="section aside">
    <p>Publicaciones Recientes</p>
        <ul>
            <li><a href="#">> Lorem ipsum</a></li>
            <li><a href="#">> Lorem ipsum</a></li>
            <li><a href="#">> Lorem ipsum</a></li>
        </ul>        
</section>
<section class="section aside">
    <p>Categoria</p>
    
    @foreach ($categories as $category)     
    <div class="aside--input"> 
    <a href="{{route($route,["ct"=>$category])}}"> {{$category->category}}</a></div>
    @endforeach
    <div class="aside--input"> 
    <span><a href="{{route($route)}}">All</a></span></div>