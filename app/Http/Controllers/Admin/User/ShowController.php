<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\Store;

class ShowController extends Controller
{
   public function __invoke(User $user){



return view('admin.users.show', compact('user'));

   }
}
