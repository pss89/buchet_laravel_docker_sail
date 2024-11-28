<?php

use App\Http\Controllers\PostController;
// use App\Models\Lists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('/', 'welcome'); // 위에 코드랑 같은 의미

Route::resource('posts', PostController::class); // 한방에 처리하는 방법 (route에 이름을 자동 부여)

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
// Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
// Route::post('/posts', [PostController::class, 'store']); // 등록
// Route::get('/posts/{:id}', [PostController::class, 'show']);
// Route::get('/posts/{:id}/edit', [PostController::class, 'edit']);
// Route::put('/posts/{:id}', [PostController::class, 'update']); // 수정
// Route::delete('/posts/{:id}', [PostController::class, 'destroy']); // 삭제

// Route::post('/', function (Request $request) {
//     echo 'POST';
//     dd($request->all());
// });

// Route::put('/{id}', function (Request $request, $id) {
//     // echo 'PUT '. $id;
//     // dd($request->all());
//     return 'put route = ' . $id;
// });

// Route::delete('/{id}', function (Request $request, $id) {
//     // echo 'PUT '. $id;
//     // dd($request->all());
//     return 'delete route = ' . $id;
// });

// Route::get('/list', function () {
//     return view('list', [
//         'heading' => '최신자료들',
//         // 'items' => Lists::getAll(),
//         // 'getItem' => Lists::getOne(3),
//         'lists' => Lists::all(),
//     ]);
// });

// Route::get('/list/{id}', function ($id) {
//     return view('view', [
//         'row' => Lists::find($id),
//     ]);
// })->where('id', '[0-9]+');






// Route::get('/hello', function () {
//     // return 'Hello World';
//     // return response('Hello World', 404);
//     return response('<h1>Hello World</h1>', 200)
//         ->header('Content-Type', 'text/html')
//         ->header('buchet', 'nice');
// });

// // Route::get('/users/{name}', function ($name = null) {
// Route::get('/users/{name?}', function ($name = null) {
//     dd($name);
//     // return '안녕, ' . $name;
// });

// // Route::get('/product/{id}', function ($id = null) {
// Route::get('/product/{id}', function ($id = null) {
//     return response("Product ID : {$id}", 200)
//         ->header('Content-Type', 'text/html');
// // })->where('id', '[0-9]+'); // 숫자만 허용되도록 처리, 만약 숫자가 아니면 not found 처리
// })->where('id', '[0-9a-zA-Z]+');

// Route::get('/search', function (Request $request) {
//     dd($request);
//     // dd($request->all());
// });