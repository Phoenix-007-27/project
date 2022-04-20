<?php

namespace App\Http\Controllers\Personal\Comment;


use App\Models\Tag;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use App\Http\Controllers\Admin\Post\BaseController;


class EditController extends Controller
{
   public function __invoke(Comment $comment){




return view('personal.comment.edit', compact('comment'));

   }
}
