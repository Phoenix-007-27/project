<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Post\BaseController;
use App\Service\PostService;

class IndexController extends BaseController
{
   public function __invoke(){

    

    

    $posts = Post::paginate(5);

      

return view('admin.posts.index', compact('posts'));

   }
}
