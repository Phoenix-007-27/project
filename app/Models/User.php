<?php

namespace App\Models;

use Illuminate\Bus\Queueable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Notifications\SendVerifyWithQueueNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;
    use SoftDeletes;
    //use Queueable;

    const ROLE_ADMIN = 0;
    const ROLE_READER = 1;

    public static function getRoles(){

        return [

            self::ROLE_ADMIN => 'Admin',
            self::ROLE_READER => 'Reader',

        ];
    }
    protected $table = 'users';
    protected $guarded = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWithQueueNotification());
    }

    public function likedPosts(){

        return $this->belongsToMany(Post::class, 'post_user_likes', 'user_id', 'post_id');
    }

    public function comments(){

        return $this->hasMany(Comment::class, 'user_id');
    }

}

