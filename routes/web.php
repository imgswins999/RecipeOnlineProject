<?php

use App\Http\Controllers\userControllers;
use Illuminate\Support\Facades\Route;
//LGOIN

Route::get('/formLogin', [userControllers::class, 'formLogin'])->name('formLogin');

Route::post('/login', [userControllers::class, 'login'])->name('login');

// LOGOUT
Route::post('/logout', [userControllers::class, 'logout'])->name('logout');

// REGIGTER
Route::get('/formRegister', [userControllers::class, 'formRegister'])->name('formRegister');

// หน้าแรก
Route::get('/home', [userControllers::class, 'home'])->name('home');
Route::get('/', [userControllers::class, 'home']);

// เพิ่มสูตรอาหาร
Route::get('/createRecipe', [userControllers::class, 'createRecipe'])->name('createRecipe');

// หน้าแสดงรายเอียดของสูตรอาหาร
// web.php
Route::get('/recipe/{recipeID}', [userControllers::class, 'showRecipe'])->name('recipe.show');
