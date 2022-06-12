<?php

namespace App\Http\Controllers\Admin\Lesson;

use App\Http\Controllers\Controller;
use App\Service\LessonsService;

class BaseController extends Controller
{
    public $service;

    public function __construct(LessonsService $service)
    {
        // Инициализация поля конструктора.
        $this->service = $service;
    }
}
