<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Tag\Store;

class EditController extends Controller
{
   public function __invoke(Tag $tag){


return view('admin.tags.edit', compact('tag'));

   }
}
