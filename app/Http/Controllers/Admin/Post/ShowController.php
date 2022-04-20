<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use App\Http\Controllers\Admin\Post\BaseController;

class ShowController extends BaseController
{
   public function __invoke(Post $post){



return view('admin.posts.show', compact('post'));

   }
}
