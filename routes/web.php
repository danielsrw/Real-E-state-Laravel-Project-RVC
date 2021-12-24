<?php

use Illuminate\Support\Facades\Route;

use App\Models\Project;
use App\Models\Service;
use App\Models\Testimony;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TestimonyController;
use App\Http\Controllers\RequestMoneyController;
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

Route::get('/request/service', [RequestServiceController::class, 'index'])->name('requestServices');
Route::get('/request/service/personal', [RequestServiceController::class, 'withoutValution'])->name('requestServicesWithoutValution');
Route::post('/request/service/personal/store', [RequestServiceController::class, 'withoutValutionStore'])->name('requestServiceWithoutValuationStore');
Route::get('/request/service/personal/valuation', [RequestServiceController::class, 'withValuation'])->name('requestServicesWithValution');
Route::post('/request/service/personal/valuation/store', [RequestServiceController::class, 'withValutionStore'])->name('requestServiceWithValuationStore');
Route::post('/request/service/institution', [RequestServiceController::class, 'storeInstitution'])->name('institutionStore');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');
Route::get('admin/contact', [ContactsController::class, 'index'])->name('adminContact');
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

// Access for all
Route::group(['middleware' => ['authen']], function() {
    Route::get('/logout', [LoginController::class, 'getLogout'])->name('logout');

    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/admin/member/edit/{id}', [DashboardController::class, 'edit'])->name('dashboardEditUser');

    Route::get('/admin/project', [ProjectsController::class, 'index'])->name('adminProjects');
    Route::post('/admin/project/store', [ProjectsController::class, 'store'])->name('adminProjectStore');
    Route::get('/admin/project/update/{id}', [ProjectsController::class, 'update'])->name('adminProjectsUpdate');
    Route::get('/admin/project/delete/{id}', [ProjectsController::class, 'destroy'])->name('adminProjectDelete');

    Route::get('/admin/service', [ServiceController::class, 'index'])->name('adminService');
    Route::post('/admin/service/store', [ServiceController::class, 'store'])->name('adminServiceStore');

    Route::get('/admin/contacts', [ContactsController::class, 'index'])->name('adminContacts');
    Route::get('/admin/contacts/delete/{id}', [ContactsController::class, 'destroy'])->name('adminDeleteContacts');

    Route::get('/admin/testimonies', [TestimonyController::class, 'index'])->name('adminTestimonies');

    Route::get('/admin/client/', [ClientsController::class, 'index'])->name('adminClient');
    Route::post('/admin/client/store', [ClientsController::class, 'store'])->name('adminClientStore');

});

// Access for admin only

Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin']], function() {
    Route::post('/admin/role/store', [DashboardController::class, 'store'])->name('adminRoleStore');

    Route::get('/admin/members', [MembersController::class, 'index'])->name('members');
    Route::get('/admin/member/enable/{id}', [MembersController::class, 'enableMember'])->name('adminEnableMember');
    Route::get('/admin/member/disable/{id}', [MembersController::class, 'disableMember'])->name('adminDisableMember');
    Route::get('/admin/member/delete/{id}', [MembersController::class, 'destroy'])->name('adminDeleteMember');
});

// Access for admin & account only

Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['admin', 'accountant']], function() {
    Route::get('/admin/requestMoney/', [RequestMoneyController::class, 'index'])->name('adminRequestMoney');
    Route::get('/admin/requestMoney/enable/{id}', [RequestMoneyController::class, 'enableMoneyRequest'])->name('adminEnableMoneyRequest');
    Route::get('/admin/requestMoney/disable/{id}', [RequestMoneyController::class, 'disableMoneyRequest'])->name('adminDisableMoneyRequest');
});

// Access for admin & manager only
Route::group(['middleware' => ['authen', 'roles'], 'roles' => ['manager', 'technical member']], function() {
    Route::get('/admin/requestMoney/{id}', [RequestMoneyController::class, 'create'])->name('adminRequestMoneyCreate');
    Route::post('/admin/requestMoney/store', [RequestMoneyController::class, 'store'])->name('adminRequestMoneyStore');
    Route::get('/admin/requestMoney/show/{id}', [RequestMoneyController::class, 'show'])->name('adminRequestMoneyShow');
});
