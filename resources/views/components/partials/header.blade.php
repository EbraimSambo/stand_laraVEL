@props(['selector'])

<header id="mainHeader" class="{{$selector}}" >
    <nav>
        <div class="logo">
            <a href="/">Logo</a>
        </div>
        <ul id="nav-links">
            <li><form action="/cars" id="searchFormtop">
                <input type="search" value="{{request('search')}}" name="search" id="" placeholder="Pesquisar por um veiculo" >
            </form></li>
            <li><a href="/">Home</a></li>
            <li><a href="/cars">Carros</a></li>
            <li><a href="/about">Sobre</a></li>
            @auth
            <li><a href="/cars/create">Criar</a></li>
            <li> <a href="">{{Auth::user()->name}}</a> </li>
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button class="bt-login" type="submit">Sair</button>
                </form>
            </li>
            @else
                <li><a class="butttons bt-login" href="/login">Login</a></li>
                <li><a class="butttons bt-login" href="/register">Registrar</a></li>
            @endauth

        </ul>
    </nav>
</header>
