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

// Route::get('/', function () {
//     return view('welcome');
// });


// get  url se seen hoga 
// post  url se nahi seen hoga . secretly data pass karega 
// put update karne ki liye sari row 
// // patch update karne ki liye ek e 
//  delete  delete  

// get post 

Route::get('/',[HomeController::class,'index'])->name('home');
