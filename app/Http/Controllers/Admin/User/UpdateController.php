<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\Store;
use App\Http\Requests\Admin\User\Update;


class UpdateController extends Controller
{
   public function __invoke(Update $request, User $user){



    $data = $request->validated();


$user->update($data);

return view('admin.users.show', compact('user'));

   }
}
