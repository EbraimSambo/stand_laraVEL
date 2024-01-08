<x-layout :selector="$selectocPag">
    <x-slot name="title" > Editar: {{$cars->title}}</x-slot>
<div id="containerCreate" >

    <form action="/update/{{$cars->id}}" method="post" enctype="multipart/form-data" class="edit">
        @csrf
        @method('PUT')
        <h1>Editar Producto</h1>

        <div class="container edit">
            <div class="img">
                <img src="{{asset('/storage/' .$cars->cover)}}" alt="">
            </div>
            <div class="inputgroup">
                <div class="input">
                    <label for="title">Titulo</label>
                    <input type="text" name="title" id="title" placeholder="Escreva o titulo" value="{{$cars->title}}">
                    @error('title')
                        <p class="danger create">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <label for="price">Preço do carro</label>
                    <input type="text" name="price" id="price" placeholder="ex: 20.000kz" value="{{$cars->price}}">
                    @error('price')
                        <p class="danger create">{{$message}}</p>
                    @enderror
                </div>
                <div class="input">
                    <label for="tags">Tags</label>
                    <input type="text" name="tags" id="tags" placeholder="Insira uma ou várias tags" value="{{$cars->tags}}">
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
                    <label for="cover">Imagem</label>
                    <input type="file" name="cover" id="cover" >
                    @error('cover')
                    <p class="danger create">{{$message}}</p>
                @enderror

                </div>
                <div class="input">
                <button class="bt-login">Editar Produto</button>
                </div>
            </div>
    </div>
    </form>
</div>

</x-layout>
