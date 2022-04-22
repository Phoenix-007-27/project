<?php

namespace App\Http\Controllers\Admin\Post;

use App\Models\Post;
use App\Service\PostService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Post\Store;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\Post\BaseController;

class StoreController extends Controller
{

   public $service;

   public function __construct(PostService $injection)
   {
         $this->service = $injection;
   }

   public function __invoke(Store $request){



      $data = $request->validated();

      

      $this->service->store($data);

return redirect()->route('admin.post.index');

   }
}
