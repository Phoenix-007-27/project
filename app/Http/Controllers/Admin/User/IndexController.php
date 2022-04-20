<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   public function __invoke(){


         
    $users = User::all();
    
    $roles = User::getRoles();
    

    

return view('admin.users.index', compact('users', 'roles'));

   }
}
