@props(['cars','desc'])
@php
    $count = count($cars);
@endphp

<section id="cars">
    @unless (count($cars) ==0)
        <div class="descGeral">
            @if (request('search'))
            <p>Proucurou por "{{request('search')}}", resultados da pesquisa ({{$count}})</p>
            @elseif(request('category'))
            <p>Proucurando por categoria "{{request('category')}}", resultados ({{$count}})</p>
            @elseif(request('tag'))
            <p>O que encontramos pela tag: "{{request('tag')}}", resultados ({{$count}})</p>
            @else
            <p>Todos automoveis,  desponiveis ({{$count}}),
                @if ((request('page')))
                    Pagina: {{(request('page'))}}</p>
                @endif
            @endif
        </div>
        <ul class="container">
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
        <div class="pagination">
            {{ $cars->onEachSide(3)->links() }}
        </div>
            @else
            <div class="noresult">
                <p>Não encontramos nada em relação a sua Pesquisa</p>
                <div class="img">
                    <img src="{{asset('/images/result.svg')}}" alt="">
                </div>
            </div>

        @endunless



</section>
