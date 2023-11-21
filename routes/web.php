<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', [HomeController::class, 'about'])->name('home.about');

Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
  if (isset($category)) {
    if (isset($item)) {
      return "Shop for {$category} for {$item}";
    }
    return "Shop for {$category}";
  }
  return "Shop for everything";
});

// Route::get('/store', function() {
//   $category = request('category');

//   if(isset($category)) {
//     return "Shop for " . strip_tags($category);
//   }

//   return "Shop for everything";
// });
