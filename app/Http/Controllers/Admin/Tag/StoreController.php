<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\Store;

class StoreController extends Controller
{
   public function __invoke(Store $request){

$data = $request->validated();

Tag::firstOrCreate($data);

return redirect()->route('admin.tag.index');

   }
}
