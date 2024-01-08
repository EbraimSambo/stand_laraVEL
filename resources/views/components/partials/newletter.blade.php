<div id="newletter">
    <div class="desc">
        <h3> <i class="bi-envelope-at-fill"></i> Newletter</h3>
        <p>Assine para se manter atualizado</p>
        @error('email')
            <p class="danger">{{$message}}</p>
        @enderror
    </div>
    <form action="/processmail" method="Post" >
        @csrf
        <input type="email" name="email" id="" placeholder="Insira o seu email" value="{{old('email')}}">
        <button class="butttons bt-login" type="submit">Assinar</button>
    </form>
</div>
