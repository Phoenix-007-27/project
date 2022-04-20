<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use App\Http\Controllers\Admin\Post\BaseController;


class EditController extends BaseController
{
   public function __invoke(Post $post){




      $categories = Category::all();
      $tags = Tag::all();

return view('admin.posts.edit', compact('post', 'categories', 'tags'));

   }
}
