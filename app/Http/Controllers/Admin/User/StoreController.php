<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\User\PasswordMail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Auth\Events\Registered;
use App\Http\Requests\Admin\User\Store;

class StoreController extends Controller
{
   public function __invoke(Store $request){


      
$data = $request->validated();

try{
   DB::beginTransaction();
$password = Str::random(10);
$data['password'] = Hash::make($password);
$user = User::firstOrCreate(['email' => $data['email']], $data);
Mail::to( $data['email'])->send(new PasswordMail($password));
event(new Registered($user));
DB::commit();
}catch(\Exception $exception)
{
   DB::rollBack();
abort (500);
}

return redirect()->route('admin.user.index');





   }
}
