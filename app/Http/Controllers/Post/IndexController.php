<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function __invoke(){




       $posts = Post::paginate(1);
       $postsRandom = Post::get()->random(2);
      $postsPopular = Post::withCount('postPopular')->orderBy('post_popular_count', 'DESC')->get()->take(4);

      

return view('post.index', compact('posts', 'postsRandom', 'postsPopular'));

   }
}
