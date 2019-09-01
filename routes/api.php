<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// routes/api.php

    Route::get('projects', 'ProjectController@index');    // получить список проектов
    Route::post('projects', 'ProjectController@store');   // добавить проект
    Route::get('projects/{id}', 'ProjectController@show'); // получитть проект 
    Route::put('projects/{project}', 'ProjectController@markAsCompleted'); // пометить как выполненый
    Route::post('tasks', 'TaskController@store');                  // добавить задание
    Route::put('tasks/{task}', 'TaskController@markAsCompleted');  // поменить задание как выполненое