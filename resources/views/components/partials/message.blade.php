@if (session()->has('messageNewlatter'))
    <div class="containerMessage">
    <div id="message">
        <div class="desc">
            <p>{{session('messageNewlatter')}}</p>
        </div>
        <div class="svg">
            <img src="{{ asset('/images/email.svg') }}" alt="">
        </div>
        <div class="options">
            <button class="close">Fechar</button>
        </div>
    </div>
</div>
@endif

@if (session()->has('successCreate'))
    <div class="containerMessage">
    <div id="message">
        <div class="desc">
            <p>{{session('successCreate')}}</p>
        </div>
        <div class="svg">
            <img src="{{ asset('/images/sucess_1.svg') }}" alt="">
        </div>
        <div class="options">
            <button class="close">Fechar</button>
        </div>
    </div>
</div>
@endif



@if (session()->has('successUpdate'))
    <div class="containerMessage">
    <div id="message">
        <div class="desc">
            <p>{{session('successUpdate')}}</p>
        </div>
        <div class="svg">
            <img src="{{ asset('/images/sucess_1.svg') }}" alt="">
        </div>
        <div class="options">
            <button class="close">Fechar</button>
        </div>
    </div>
</div>
@endif

@if (session()->has('messageDelete'))
    <div class="containerMessage">
    <div id="message">
        <div class="desc">
            <p>{{session('messageDelete')}}</p>
        </div>
        <div class="svg">
            <img src="{{ asset('/images/sucess_1.svg') }}" alt="">
        </div>
        <div class="options">
            <button class="close">Fechar</button>
        </div>
    </div>
</div>
@endif
