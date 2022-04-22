<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
   public function __invoke(){

      // $users = User::all();      //подсчет количества доменов электронной почты
      // foreach ($users as $user){
      //   $coll[] = $user->email;
      // }
      // $collection = collect($coll);
      // $counted = $collection->countBy(function ($email) {
      //    return substr(strrchr($email, "@"), 1);
      //    });
      //     dd( $counted->all());
      


       $posts = Post::paginate(3);
       $postsRandom = Post::get()->random(2);
      $postsPopular = Post::withCount('postPopular')->orderBy('post_popular_count', 'DESC')->get()->take(4);

      

return view('post.index', compact('posts', 'postsRandom', 'postsPopular'));

   }
}
