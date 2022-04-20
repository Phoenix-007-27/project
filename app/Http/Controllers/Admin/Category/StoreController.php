<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Store;

class StoreController extends Controller
{
   public function __invoke(Store $request){

$data = $request->validated();

Category::firstOrCreate($data);

return redirect()->route('admin.category.index');

   }
}
