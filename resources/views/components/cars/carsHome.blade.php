@props(['cars'])
@php
    $count = count($cars);
@endphp

<section id="cars">
    <div class="descGeral">
        <h2>Escolha um carro</h2>
        <p>Elaboramos estes automoveis para si, resultados ({{$count}})</p>
    </div>

    <ul class="container">
        @unless (count($cars) ==0)
            @foreach ($cars as $car)
            <li class="card">
                <a href="/cars/{{$car->id}}">
                    <div class="img">
                        <img src="{{asset('/storage/' .$car->cover)}}" alt="">
                    </div>
                    <h2 class="primary">{{$car->title}} </h2>
                    <div class="desc">
                        <p class="price"> Preço: {{$car->price}} kz</p>
                        <p class="category">
                            @if ($car->category == 'new')
                                Categoria:  Carro Novo
                            @else
                            Categoria: {{$car->category}}
                            @endif
                           </p>
                    </div>
                </a>
            </li>
            @endforeach
</ul>
            @else
            <div class="noresult">
                <p>Não encontramos nada em relação ao seu resultado</p>
                <div class="img">
                    <img src="{{asset('/images/result.svg')}}" alt="">
                </div>
            </div>

        @endunless




</section>
