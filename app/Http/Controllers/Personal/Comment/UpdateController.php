<?php

namespace App\Http\Controllers\Personal\Comment;


use App\Models\Post;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Personal\Comment\Update;
use App\Http\Controllers\Admin\Post\BaseController;



class UpdateController extends Controller
{
   public function __invoke(Update $request, Comment $comment){



       $data = $request->validated();

        $comment->update($data);

return redirect()->route('personal.comment.index'); //
//view('admin.posts.show', compact('comment'));

   }
}
