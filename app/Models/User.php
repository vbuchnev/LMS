<?php

namespace App\Models;

use App\Notifications\SendVerifyWithQueueNotification;
use App\Models\Result;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    const ROLE_USER =0;
    const ROLE_ADMIN =1;

    public static function getRoles()
    {
        return [
            self::ROLE_USER => 'Ученик',
            self::ROLE_ADMIN => 'Админ',
        ];
    }

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

    // Доп метод для верификации
    public function sendEmailVerificationNotification()
    {
        $this->notify(new SendVerifyWithQueueNotification());
    }


    public  function  FavoritesLesson()
    {
        return $this->belongsToMany(Lesson::class, 'lesson_user_favorites', 'user_id', 'lesson_id',);
    }

    public function isAdmin()
    {
        if ((int) auth()->user()->role == User::ROLE_ADMIN){
            return true;
        }
    }

    public function userResults()
    {
        return $this->hasMany(Result::class, 'user_id', 'id');
    }

}
