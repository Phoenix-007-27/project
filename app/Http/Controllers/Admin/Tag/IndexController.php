<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
   public function __invoke(){

    $tags = Tag::all();

return view('admin.tags.index', compact('tags'));

   }
}
