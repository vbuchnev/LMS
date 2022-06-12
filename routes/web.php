<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
*/


Route::group(['namespace' => 'Main', 'middleware' => ['throttle:60']], function () {
    Route::get('/', 'IndexController')->name('main.index');
});

Route::group(['namespace' => 'lelo', 'prefix' => 'jopa'], function () {
    Route::get('/', 'IndexController')->name('main.jopa');
});

Route::group(['namespace' => 'Course', 'prefix' => 'courses', 'middleware' => ['throttle:60']], function () {
    Route::get('/', 'IndexController')->name('course.index');
    Route::get('/search', 'SearchController')->name('course.search');
    Route::group(['namespace' => 'Lesson', 'prefix' => '{course}/lessons'], function (){
        Route::get('/','IndexController')->name('course.lesson.index');
    });
    Route::group(['namespace' => 'Test', 'prefix' => '{course}/test'], function (){
        Route::get('/','IndexController')->name('course.test.index');
        Route::post('/','StoreController')->name('course.test.store');
    });
});

Route::group(['namespace' => 'Result', 'prefix' => 'results', 'middleware' => ['throttle:60']], function () {
    Route::get('/show/{result}', 'ShowController')->name('results.show');
    Route::get('/{result}', 'SendController')->name('results.send');
});

Route::group(['namespace' => 'Lesson', 'prefix' => 'lessons', 'middleware' => ['throttle:60']], function () {
    Route::get('/', 'IndexController')->name('lesson.index');
    Route::get('/search', 'SearchController')->name('lesson.search');
    Route::get('/{lesson}', 'ShowController')->name('lesson.show');
    Route::group(['namespace' => 'Favorite', 'prefix' => '{lesson}/Favorites'], function (){
       Route::post('/','StoreController')->name('lesson.favorite.store');
    });
    Route::group(['namespace' => 'Test', 'prefix' => '{lesson}/test'], function (){
        Route::get('/','IndexController')->name('lesson.test.index');
    });
});

Route::group(['namespace' => 'Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified', 'throttle:60']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('personal.main.index');
    });
    Route::group(['namespace' => 'Profile', 'prefix' => 'profile'], function () {
        Route::get('/', 'IndexController')->name('personal.profile.index');
        Route::patch('/{user}', 'UpdateController')->name('personal.profile.update');
    });
    Route::group(['namespace' => 'Favorites', 'prefix' => 'favorites'], function () {
        Route::get('/', 'IndexController')->name('personal.favorites.index');
        Route::delete('/{lesson}', 'DeleteController')->name('personal.favorites.delete');
    });
    Route::group(['namespace' => 'Result', 'prefix' => 'result'], function () {
        Route::get('/', 'IndexController')->name('personal.result.index');
    });
});

Route::group(['namespace' => 'Test', 'prefix' => 'tests', 'middleware' => ['throttle:60']], function () {
    Route::get('/', 'IndexController')->name('test.index');
    Route::get('/search', 'SearchController')->name('test.search');
    Route::get('/{test}','ShowController')->name('test.show');
    Route::post('/','StoreController')->name('test.store');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified', 'throttle:60']], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index');
    });

    //  ADMIN   COURSE

    Route::group(['namespace' => 'Course', 'prefix' => 'courses'], function () {
        Route::get('/', 'IndexController')->name('admin.course.index');
        Route::get('/trash', 'TrashController')->name('admin.course.trash');
        Route::post('/{course}', 'RestoreController')->name('admin.course.restore');
        Route::get('/create', 'CreateController')->name('admin.course.create');
        Route::post('/', 'StoreController')->name('admin.course.store');
        Route::get('/{course}', 'ShowController')->name('admin.course.show');
        Route::get('/{course}/edit', 'EditController')->name('admin.course.edit');
        Route::patch('/{course}', 'UpdateController')->name('admin.course.update');
        Route::delete('/{course}', 'DeleteController')->name('admin.course.delete');
    });

    //  ADMIN   LESSON

    Route::group(['namespace' => 'Lesson', 'prefix' => 'lessons'], function () {
        Route::get('/', 'IndexController')->name('admin.lesson.index');
        Route::get('/trash', 'TrashController')->name('admin.lesson.trash');
        Route::post('/{lesson}', 'RestoreController')->name('admin.lesson.restore');
        Route::get('/create', 'CreateController')->name('admin.lesson.create');
        Route::post('/', 'StoreController')->name('admin.lesson.store');
        Route::get('/{lesson}', 'ShowController')->name('admin.lesson.show');
        Route::get('/{lesson}/edit', 'EditController')->name('admin.lesson.edit');
        Route::patch('/{lesson}', 'UpdateController')->name('admin.lesson.update');
        Route::delete('/{lesson}', 'DeleteController')->name('admin.lesson.delete');
    });

    //  ADMIN   TAG

    Route::group(['namespace' => 'Tag', 'prefix' => 'tags'], function () {
        Route::get('/', 'IndexController')->name('admin.tag.index');
        Route::get('/create', 'CreateController')->name('admin.tag.create');
        Route::post('/', 'StoreController')->name('admin.tag.store');
        Route::get('/{tag}', 'ShowController')->name('admin.tag.show');
        Route::get('/{tag}/edit', 'EditController')->name('admin.tag.edit');
        Route::patch('/{tag}', 'UpdateController')->name('admin.tag.update');
        Route::delete('/{tag}', 'DeleteController')->name('admin.tag.delete');
    });

    //  ADMIN   TEST

    Route::group(['namespace' => 'Test', 'prefix' => 'tests'], function () {
        Route::get('/', 'IndexController')->name('admin.test.index');
        Route::get('/trash', 'TrashController')->name('admin.test.trash');
        Route::post('/{test}', 'RestoreController')->name('admin.test.restore');
        Route::get('/create', 'CreateController')->name('admin.test.create');
        Route::post('/', 'StoreController')->name('admin.test.store');
        Route::get('/{test}', 'ShowController')->name('admin.test.show');
        Route::get('/{test}/edit', 'EditController')->name('admin.test.edit');
        Route::patch('/{test}', 'UpdateController')->name('admin.test.update');
        Route::delete('/{test}', 'DeleteController')->name('admin.test.delete');
    });

    //  ADMIN   QUESTION

    Route::group(['namespace' => 'Question', 'prefix' => 'questions'], function () {
        Route::get('/', 'IndexController')->name('admin.question.index');
        Route::get('/trash', 'TrashController')->name('admin.question.trash');
        Route::post('/{question}', 'RestoreController')->name('admin.question.restore');
        Route::get('/create', 'CreateController')->name('admin.question.create');
        Route::post('/create', 'StoreController')->name('admin.question.store');
        Route::get('/{question}', 'ShowController')->name('admin.question.show');
        Route::get('/{question}/edit', 'EditController')->name('admin.question.edit');
        Route::patch('/{question}', 'UpdateController')->name('admin.question.update');
        Route::delete('/{question}', 'DeleteController')->name('admin.question.delete');
    });

    //  ADMIN   OPTION

    Route::group(['namespace' => 'Option', 'prefix' => 'options'], function () {
        Route::get('/', 'IndexController')->name('admin.option.index');
        Route::get('/trash', 'TrashController')->name('admin.option.trash');
        Route::post('/{option}', 'RestoreController')->name('admin.option.restore');
        Route::get('/create', 'CreateController')->name('admin.option.create');
        Route::post('/', 'StoreController')->name('admin.option.store');
        Route::get('/{option}', 'ShowController')->name('admin.option.show');
        Route::get('/{option}/edit', 'EditController')->name('admin.option.edit');
        Route::patch('/{option}', 'UpdateController')->name('admin.option.update');
        Route::delete('/{option}', 'DeleteController')->name('admin.option.delete');
    });

    //  ADMIN   RESULT

    Route::group(['namespace' => 'Result', 'prefix' => 'results'], function () {
        Route::get('/', 'IndexController')->name('admin.result.index');
//        Route::get('/create', 'CreateController')->name('admin.result.create');
//        Route::post('/', 'StoreController')->name('admin.result.store');
        Route::get('/{result}', 'ShowController')->name('admin.result.show');
//        Route::get('/{result}/edit', 'EditController')->name('admin.result.edit');
//        Route::patch('/{result}', 'UpdateController')->name('admin.result.update');
        Route::delete('/{result}', 'DeleteController')->name('admin.result.delete');
    });

    //  ADMIN   USER

    Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
        Route::get('/', 'IndexController')->name('admin.user.index');
        Route::get('/create', 'CreateController')->name('admin.user.create');
        Route::post('/', 'StoreController')->name('admin.user.store');
        Route::get('/{user}', 'ShowController')->name('admin.user.show');
        Route::get('/{user}/edit', 'EditController')->name('admin.user.edit');
        Route::patch('/{user}', 'UpdateController')->name('admin.user.update');
        Route::delete('/{user}', 'DeleteController')->name('admin.user.delete');
    });
});

Auth::routes(['verify' => true]);
