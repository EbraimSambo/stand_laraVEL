<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Descriptions;
use App\Models\Newlatters;
use Illuminate\Http\Request;

class MainController extends Controller
{
   public function home()  {
      return view('pages.home',
      [
      'selectocPag'=> 'home',
      'cars'=>Cars::inRandomOrder()->take(8)->get()
      ])->with('title', 'Home');
   }

   public function show(Cars $cars){
      return view('pages.show',[
         'cars'=>$cars,
         'selectocPag'=> 'no-home'
      ])->with('title', 'Show');
   }


   public function cars(){
      return view('pages.cars',
      ['selectocPag'=> 'no-home',
        'cars'=> Cars::latest()->filter(request(['search','tag','category']))->paginate(7)
      ])->with('title', 'Carros');
   }


   public function create()  {
      return view('pages.createcars',[
         'selectocPag'=> 'no-home',
      ]);
   }

   public function edit(Cars $cars)  {
      return view('pages.edit',[
         'selectocPag'=> 'no-home',
         'cars'=>$cars
      ]);
   }

}
