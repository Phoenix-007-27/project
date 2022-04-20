<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\Store;

class EditController extends Controller
{
   public function __invoke(User $user){

      $roles = User::getRoles();

return view('admin.users.edit', compact('user', 'roles'));

   }
}
