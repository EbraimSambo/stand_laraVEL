<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('styles/css/global.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <main>
        <section class="register">
            <div id="containerCreate">

                <form action="/loginProcess" method="post" >
                    @csrf
                    @method('POST')
                    <h1>Rigistrar</h1>
                    <div class="container no">
                        <div class="inputgroup">
                            <div class="input">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="price" placeholder="ex: 20.000kz" value="{{old('password')}}">
                                @error('email')
                                    <p class="danger create">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="input">
                                <label for="password">PalavraPasse</label>
                                <input type="password" name="password" id="tags" placeholder="Insira uma ou várias tags" value="{{old('tags')}}">
                                @error('password')
                                    <p class="danger create">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="input">
                            <button class="bt-login">Registrar</button>
                            </div>
                        </div>
                </div>
                </form>
            </div>

        </section>
    </main>
</body>
</html>
