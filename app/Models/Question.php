<?php

namespace App\Models;

use App\Models\Test;
use App\Models\Option;
use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'questions';
    protected  $guarded = false;

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'created_at',
        'updated_at',
        'deleted_at',
        'test_id',
        'question_text',
    ];

    public function questionOptions()
    {
        return $this->hasMany(Option::class, 'question_id', 'id');
    }

    public function questionsResults()
    {
        return $this->belongsToMany(Result::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class, 'test_id');
    }
}
