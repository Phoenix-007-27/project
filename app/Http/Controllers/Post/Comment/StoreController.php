<?php

namespace App\Http\Controllers\Post\Comment;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Post\Comment\Store;


class StoreController extends Controller
{
   public function __invoke(Post $post, Store $request){

       $data = $request->validated();
       $data['user_id'] = auth()->user()->id;
       $data['post_id'] = $post->id;
       Comment::create($data);

      



    return redirect()->route('post.show', $post->id);

   }
}
