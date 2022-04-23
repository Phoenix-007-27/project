<?php

namespace App\Http\Controllers\Category\Post;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function __invoke(Category $category){


   $posts = $category->posts()->paginate(1);
   
      

return view('category.post.index', compact('posts'));

   }
}
