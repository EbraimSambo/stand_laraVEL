@props(['cars'])

@php
    $tags = explode(',', $cars->tags)
@endphp

@if (!empty($cars))


<section id="carshow">
    <div class="container">
        <div class="img">
            <img src="{{asset('/storage/' .$cars->cover)}}" alt="">
        </div>
        <div class="descs">
            <h1 class="title"> {{$cars->title}} </h1>
            <p><span>Preço:</span> <span> {{$cars->price}} kz </span> </p>
            <p><span>Categoria:</span> <a href="/cars/?category={{$cars->category}}"> {{$cars->category}}</a> </p>
            <p><span>Tags:</span>
                @foreach ($tags as $tag)
                  <a class="tag" href="/cars?tag={{$tag}}">{{$tag}}</a>
                @endforeach

                 </p>
                 @auth
                <div class="optinos">
                    <a class="blue" href="/cars/{{$cars->id}}/edit">Editar</a>
                    <form action="/delete/{{$cars->id}}" method="POST"> @csrf @method('DELETE') <button type="submit" class="danger red">Deletar</button> </form>
                </div>
                 @endauth

        </div>
    </div>
</section>
@else
    <p>Carro não encontrado</p>
@endif
