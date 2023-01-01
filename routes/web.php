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

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/search/teacher', function () {
    return view('teachers-index');
})->name('teacher.index');

Route::get('/search/teacher/detail', function () {
    return view('teacher-detail');
})->name('teacher.detail');

Route::get('/search/result', function () {
    return view('search-result');
})->name('teacher.result');

Route::get('/teacher/signup', function () {
    return view('teacher.signup');
})->name('teacher.signup');

Route::get('/teacher/login', function () {
    return view('teacher.login');
})->name('teacher.login');

Route::get('/teacher/dashboard', function () {
    return view('teacher.dashboard');
})->name('teacher.dashboard');

Route::get('/teacher/query', function () {
    return view('teacher.query');
})->name('teacher.query');

Route::get('/teacher/query/detail', function () {
    return view('teacher.query-detail');
})->name('teacher.query-detail');

Route::get('/teacher/profile', function () {
    return view('teacher.profile');
})->name('teacher.profile');

Route::get('/teacher/change-password', function () {
    return view('teacher.change-password');
})->name('teacher.change-password');


/**
 * Admin
 */
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

Route::get('/admin/subject', function () {
    return view('admin.subject');
})->name('admin.subject');

Route::get('/admin/subject/add', function () {
    return view('admin.subject-add');
})->name('admin.subject-add');

Route::get('/admin/subject/edit', function () {
    return view('admin.subject-edit');
})->name('admin.subject-edit');

Route::get('/admin/teacher', function () {
    return view('admin.teacher');
})->name('admin.teacher');

Route::get('/admin/teacher/add', function () {
    return view('admin.teacher-add');
})->name('admin.teacher-add');

Route::get('/admin/teacher/edit', function () {
    return view('admin.teacher-edit');
})->name('admin.teacher-edit');

Route::get('/admin/teacher/query', function () {
    return view('admin.teacher-query');
})->name('admin.teacher-query');

Route::get('/admin/teacher/query/view', function () {
    return view('admin.teacher-query-view');
})->name('admin.teacher-query-view');

Route::get('/admin/class', function () {
    return view('admin.kelas');
})->name('admin.kelas');

Route::get('/admin/class/add', function () {
    return view('admin.kelas-add');
})->name('admin.kelas-add');

Route::get('/admin/class/edit', function () {
    return view('admin.kelas-edit');
})->name('admin.kelas-edit');

Route::get('/admin/timetable', function () {
    return view('admin.timetable');
})->name('admin.timetable');

Route::get('/admin/timetable/view', function () {
    return view('admin.timetable-view');
})->name('admin.timetable-view');

Route::get('/admin/timetable/add', function () {
    return view('admin.timetable-add');
})->name('admin.timetable-add');

Route::get('/admin/timetable/edit', function () {
    return view('admin.timetable-edit');
})->name('admin.timetable-edit');

Route::get('/admin/report/timetable', function () {
    return view('admin.report-timetable');
})->name('admin.report-timetable');

Route::get('/admin/report/subject', function () {
    return view('admin.report-class');
})->name('admin.report-class');
