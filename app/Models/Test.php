<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Test extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'tests';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'lesson_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function lesson()
    {
        return $this->belongsTo
        (
            Lesson::class,
            'lesson_id',
        );
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
