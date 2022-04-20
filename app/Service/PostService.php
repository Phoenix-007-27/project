<?php

namespace App\Service;

use Exception;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostService
{

        public function store($data)
    {

        try{
            DB::beginTransaction();

            $data['preview_image'] = Storage::disk('public')->put('/image', $data['preview_image']);
            $data['main_image'] = Storage::disk('public')->put('/image', $data['main_image']);
            
            
            
            $tags = $data['tags_ids'];
            unset($data['tags_ids']);
            
            
            $post = Post::firstOrCreate($data);
            $post->tags()->attach($tags);
            DB::commit();
            
            } catch(\Exception $exception){
                DB::rollback();
            
               abort(500);
            
            }
    }

    public function update($data, $post)
    {
        try{
            
            DB::beginTransaction();

            if(isset($data['preview_image'])){
                $data['preview_image'] = Storage::disk('public')->put('/image', $data['preview_image']);
            }
            if(isset($data['main_image'])){
            $data['main_image'] = Storage::disk('public')->put('/image', $data['main_image']);
            }
        
                     
            $tags = $data['tags_ids'];
            unset($data['tags_ids']);
            
            $post->update($data);
            $post->tags()->sync($tags);
            DB::commit();
            
        }catch(\Exception $exception){
            DB::rollback();
            abort(500);
        }
        return $post;
    }
}
