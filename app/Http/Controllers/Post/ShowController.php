<?php

namespace App\Http\Controllers\Post;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ShowController extends Controller
{
   public function __invoke(Post $post){



      



       $date = Carbon::parse($post->created_at);


       $relatedPosts = Post::where('post->tag->', $post->category_id)
       ->where('id', '!=', $post->id)
       ->get()
       ->take(3);



return view('post.show', compact('post', 'date', 'relatedPosts'));

   }
}
