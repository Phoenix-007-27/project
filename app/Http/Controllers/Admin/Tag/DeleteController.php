<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Models\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
   public function __invoke(Tag $tag){

    

    $tag->delete();

return redirect()->route('admin.tag.index');

   }
}
