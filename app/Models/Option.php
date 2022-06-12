<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $table = 'options';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'points',
        'created_at',
        'updated_at',
        'deleted_at',
        'question_id',
        'option_text',
    ];

    const UN_CORRECT =0;
    const CORRECT =1;

    public static function getCorrect()
    {
        return [
            self::UN_CORRECT => 'Неверный',
            self::CORRECT => 'Верный',
        ];
    }

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
