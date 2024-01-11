<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TodoListController;
use App\Http\Controllers\CourseController;

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
Route::get('/', [HomeController::class, 'contentView'])->name('home');
Route::get('/sign-in', [UserController::class, 'signIn'])->name('sign-in');
Route::get('/sign-up', [UserController::class, 'signUp'])->name('sign-up');
Route::get('/sign-out', [UserController::class, 'signOut'])->name('sign-out');

Route::post('/store-user', [UserController::class, 'storeUser'])->name('store-user');
Route::post('/auth-user', [UserController::class, 'authUser'])->name('auth-user');

//TO DO LIST
Route::get('/todo-list', [TodoListController::class, 'todoList']);
Route::post('/store-activity', [TodoListController::class, 'storeActivity'])->name('store-activity');
Route::post('/update-activity', [TodoListController::class, 'updateActivity'])->name('update-activity');

//COURSE 
Route::get('/departments', [CourseController::class, 'deptView']);
Route::get('/courses/{dept_id}', [CourseController::class, 'courseView'])->name('courses');
Route::get('/subjects', [CourseController::class, 'subjView'])->name('subjects');