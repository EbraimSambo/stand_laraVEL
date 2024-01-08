<div id="containerCreate">

    <form action="/cars/createprocess" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Criar Producto</h1>
        <div class="container">
            <div class="cover">
                <label for="cover">
                    <div class="desc">
                        Clique aqui ou solta a sua imagem aqui
                    </div>
                </label>
                @error('cover')
                    <p class="danger create">{{$message}}</p>
                @enderror
                <input type="file" name="cover" id="cover" >
            </div>
            <div class="inputgroup">
                <div class="input">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" placeholder="Escreva o titulo" value="{{old('title')}}">
                    @error('title')
                        <p class="danger create">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <label for="price">Preço do carro</label>
                    <input type="text" name="price" id="price" placeholder="ex: 20.000kz" value="{{old('price')}}">
                    @error('price')
                        <p class="danger create">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" placeholder="Insira uma ou várias tags" value="{{old('tags')}}">
                    @error('tags')
                        <p class="danger create">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <label for="category">Categoria</label>
                    <select id="category" name="category">
                        <option disabled>Escolher Categoria</option>
                        <option value="new">Carro Novo</option>
                        <option value="old">Carro Velho</option>
                        <option value="classico">Carro Classico</option>
                        <option value="aluguer">Carro para alugar</option>
                    </select>
                    @error('category')
                        <p class="danger create">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                <button class="bt-login">Criar Produto</button>
                </div>
            </div>
    </div>
    </form>
</div>

