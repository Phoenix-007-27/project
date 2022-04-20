<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'tags';
    protected $guarded = false;

    public function posts(){

        return $this->belongsToMany(Post::class);
    }
}
