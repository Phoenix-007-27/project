<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\Store;
use App\Http\Requests\Admin\Tag\Update;


class UpdateController extends Controller
{
   public function __invoke(Update $request, Tag $tag){



    $data = $request->validated();

$tag->update($data);

return view('admin.tags.show', compact('tag'));

   }
}
