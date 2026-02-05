<?php

use Illuminate\Support\Facades\Route;
use App\Models\Expense;

Route::get('/', function () {
   return view('welcome');
});

Route::get('/income', function () {
   return view('budgeter/income');
});

Route::get('/expenses', function () {
   return view('budgeter/expenses', [
      'expenses' => Expense::all(),
   ]);
});

Route::get('/expense/{id}', function ($id) {
   if (empty($expense = Expense::find($id))) { return abort(404); }

   return view('budgeter/expense', [
      'expense' => $expense,
   ]);
});

Route::get('/summary', function () {
   return view('budgeter/summary');
});


Route::get('/posts', function () {
   return view('posts');
});


Route::get('/posts/{post}', function ($slug) {
  $path = __DIR__ . "/../resources/posts/{$slug}.html";
  if (!file_exists($path)) {
     var_dump($path);
     dd('File does not exist!');
  }

  $post = file_get_contents($path);
  return view('post', [
     'post' => $post,
  ]);
});
