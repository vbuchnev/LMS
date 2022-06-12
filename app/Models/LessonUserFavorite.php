<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonUserFavorite extends Model
{
    use HasFactory;

    protected  $table = 'lesson_user_favorites';
    protected  $guarded = false;
}
