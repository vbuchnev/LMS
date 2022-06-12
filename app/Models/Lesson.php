<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesson extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $table = 'lessons';
    protected  $guarded = false;

    public function tags()
    {
        return $this->belongsToMany
        (
            Tag::class,
            'lessons_tags',
            'lesson_id',
            'tag_id'
        );
    }

    public function course()
    {
        return $this->belongsTo
        (
            Course::class,
            'course_id',
            'id',
        );
    }

    public function tests()
    {
        return $this->hasMany(Test::class, 'lesson_id', 'id');
    }

    public function testQuestions()
    {
        return $this->hasMany(Question::class, 'test_id', 'id');
    }

    public function testOptions()
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }
}
