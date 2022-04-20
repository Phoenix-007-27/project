<?php

namespace App\Http\Controllers\Admin\Category;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Store;
use App\Http\Requests\Admin\Category\Update;


class UpdateController extends Controller
{
   public function __invoke(Update $request, Category $category){



    $data = $request->validated();

$category->update($data);

return view('admin.categories.show', compact('category'));

   }
}
