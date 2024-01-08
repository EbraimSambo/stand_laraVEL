<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()  {
        return view('pages.register');
    }

    public function store(Request $request, User $user)  {
        $formFields= $request->validate([
            'name'=>['required', 'min:3'],
            'email'=>['required','email', Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ],[
            'name.required'=>'esqueceu de colocar o nome',
            'email.email'=>'email invalido',
            'email.unique'=>'email já foi cadastradado',
            'password.required'=>'esqueceu de criar a password ',
            'password.confirmed'=>'as palavras passe n]ao s]ao identica',
        ]
    );

        $formFields['password'] = bcrypt($formFields['password']);

        $user::create($formFields);

        auth()->login($user);

        return redirect('/login')->with('message', 'Usuario cadastrado com sucesso');
    }

    public function login() {
        return view('pages.login');
    }

    public function autheticate(Request $request){
        $formFields=$request->validate([
            'email'=>['required','email'],
            'password'=>'required'
        ],[
            'name.required'=>'esqueceu de colocar o nome',
            'email.email'=>'email invalido',
            'password.required'=>'n]ao colocou a palavra passe',
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();
            return redirect('/')->with('message', 'Acessou a sua conta');
        }

        return back()->withErrors(['email'=>'Email invalido'])->onlyInput('email');
    }

    public function logout(Request $request) {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message', 'Saiste da tua conta');
    }
}
