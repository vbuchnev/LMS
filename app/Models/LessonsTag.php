<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LessonsTag extends Model
{
    use HasFactory;

    protected  $table = 'lessons_tags';
    protected  $guarded = false;
}
