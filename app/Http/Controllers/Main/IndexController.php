<?php

namespace App\Http\Controllers\Main;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function __invoke(){

    $users = User::all();


    foreach ($users as $user){
        $a[] = $user->email;
    }

   $a = collect($a);


    $counted = $a->countBy(function ($email){return substr(strrchr($email, "@"), 1);});



    dd($counted->all());


return view('main.index');

   }
}
