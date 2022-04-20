<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\Tag;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\Post\BaseController;

class IndexController extends Controller
{
   public function __invoke(){

    $comments = auth()->user()->comments;

return view('personal.comment.index', compact('comments'));

   }
}
