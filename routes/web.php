<?php

use Illuminate\Support\Facades\Route;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimony;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\RequestServiceController;

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
    return view('home');
})->name('home');

Route::get('/about', function () {
    $testimonies = Testimony::all();
    return view('about', compact('testimonies'));
})->name('about');

Route::get('/services', function () {
    $services = Service::all();
    return view('services', compact('services'));
})->name('services');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/projects', function () {
    $projects = Project::all();
    return view('projects', compact('projects'));
})->name('projects');

Route::get('/request/service', [RequestServiceController::class, 'create'])->name('requestServices');
Route::post('/request/service/personal', [RequestServiceController::class, 'storePersonal'])->name('personalStore');
Route::post('/request/service/institution', [RequestServiceController::class, 'storeInstitution'])->name('institutionStore');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::post('/contacts/store', [ContactsController::class, 'store'])->name('contactStore');

Route::post('/testimony/store', [TestimonyController::class, 'store'])->name('testimonyStore');

// Admin

Route::get('/admin/noPermission', function () {
    return view('admin.noPermission');
})->name('noPermission');

Route::get('/admin/signin', [LoginController::class, 'getLogin'])->name('signin');
Route::post('/login', [LoginController::class, 'postLogin'])->name('login');

Route::get('/admin/signup', [RegisterController::class, 'create'])->name('signup');
Route::post('/register', [RegisterController::class, 'store'])->name('register');

Route::group(['middleware' => ['authen']], function() {
    Route::get('/logout', [LoginController::class, 'getLogout'])->name('logout');

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/admin/project', [ProjectsController::class, 'index'])->name('adminProjects');
    Route::post('/admin/project/store', [ProjectsController::class, 'store'])->name('adminProjectStore');
    Route::get('/admin/project/edit/{id}', [ProjectsController::class, 'edit'])->name('adminProjectsEdit');
    Route::patch('/admin/project/{id}/update', [ProjectsController::class, 'update'])->name('adminProjectsUpdate');

    Route::get('/admin/service', [ServiceController::class, 'index'])->name('adminService');
    Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('adminServiceStore');

    Route::get('/admin/contacts', [ContactsController::class, 'index'])->name('adminContacts');

    Route::get('/admin/testimonies', [TestimonyController::class, 'index'])->name('adminTestimonies');

});

Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin']], function() {
    Route::post('/admin/role/store', [DashboardController::class, 'store'])->name('adminRoleStore');

    Route::get('/admin/members', [MembersController::class, 'index'])->name('members');
});