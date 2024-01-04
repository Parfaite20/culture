<?php

use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Auteur\AddpostComponent;
use App\Http\Livewire\Auteur\AuteurDashboardComponent;
use App\Http\Livewire\Auteur\CategorieComponent;
use App\Http\Livewire\Auteur\EditcategorieComponent;
use App\Http\Livewire\Auteur\PostComponent;
use App\Http\Livewire\HomeComponent;
use App\Http\Livewire\ProfileComponent;
use App\Http\Livewire\EditprofileComponent;
use App\Http\Livewire\User\UserDashboardComponent;
use App\Http\Livewire\User\UserlistComponent;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeComponent::class);

/*Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});*/


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/user/dashboard', UserDashboardComponent::class)->name('user.dashboard'); 
});

//auteur
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authauteur'])
    ->group(function () {
        Route::get('/auteur/dashboard', AuteurDashboardComponent::class)->name('auteur.dashboard');      
});

//admin
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified', 'authadmin'])
    ->group(function () {
        Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});


//admin, auteur
Route::get('/auteur/post', PostComponent::class)->name('auteur.post');
Route::get('/auteur/addpost', AddpostComponent::class)->name('auteur.ajoutpost');
Route::get('/auteur/categorie', CategorieComponent::class)->name('auteur.cate');
//Route::get('/auteur/editcategorie/{categorie_slug}', EditcategorieComponent::class)->name('auteur.edit');

//admin, users
Route::get('/user/userlist', UserlistComponent::class)->name('user.list');

//admin, auteur, user
Route::get('/profile', ProfileComponent::class)->name('profile');
Route::get('/profile/edit/{profile_id?}', EditprofileComponent::class)->name('profile.editprofile');