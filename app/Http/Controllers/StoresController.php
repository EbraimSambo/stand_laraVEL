<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Newlatters;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StoresController extends Controller
{
    public function newLatters(Request $request){
        $formFields = $request->validate([
            'email'=> ['required', 'email', Rule::unique('newlatters','email')]
        ],[
            'email.required'=>'O campo email é obrigatório',
            'email.unique'=>'Este email já foi cadastrado'
        ]);

        Newlatters::create($formFields);

        return back()->with('messageNewlatter', 'Email cadastrado com sucesso: ' .$formFields['email']);
    }

    public function createCars(Request $request) {
        $formFields = $request->validate
        ([
            'title'=>'required',
            'price'=>'required',
            'category'=>'required',
            'tags'=>'required',
            'cover'=>'required',
        ],
        [
            'title.required'=>'Esqueceu de descrever o carro',
            'price.required'=>'Esqueceu de colocar o preço do carro',
            'tags.tags'=>'Esqueceu de inserir as tegas',
            'category.required'=>'Esqueceu de escolher a categoria do carro',
            'cover.required'=>'Esqueceu de escolher a imagem do carro',
        ]);

        if ($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('covers', 'public');
         }

        Cars::create($formFields);

        return back()->with('successCreate', 'Dados criado e evnviado com sucesso');
    }

    public function update(Request $request, Cars $cars) {
        $formFields = $request->validate
        ([
            'title'=>'required',
            'price'=>'required',
            'category'=>'required',
            'tags'=>'required',
        ],
        [
            'title.required'=>'Esqueceu de descrever o carro',
            'price.required'=>'Esqueceu de colocar o preço do carro',
            'tags.tags'=>'Esqueceu de inserir as tegas',
            'category.required'=>'Esqueceu de escolher a categoria do carro',
        ]);

        if ($request->hasFile('cover')) {
            $formFields['cover'] = $request->file('cover')->store('covers', 'public');
         }

        $cars->update($formFields);

        return back()->with('successUpdate', 'Dados editado com sucesso');
    }

    public function destroy(Cars $cars)  {
        $cars->delete();
        return redirect('/cars')->with('messageDelete', 'Dados elimidado com sucesso:');
    }
}
