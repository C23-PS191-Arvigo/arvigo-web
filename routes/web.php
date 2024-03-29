<?php

use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\Book2Controller;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PublisherController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\Transaction2Controller as AdminTransaction2Controller;
use App\Http\Controllers\Admin\Transaction3Controller as AdminTransaction3Controller;
use App\Http\Controllers\Admin\Transaction4Controller as AdminTransaction4Controller;
use App\Http\Controllers\Admin\Transaction5Controller as AdminTransaction5Controller;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\User\BookController as UserBookController;
use App\Http\Controllers\User\CartController as UserCartController;
use App\Http\Controllers\User\HomeController as UserHomeController;
use App\Http\Controllers\User\SettingController as UserSettingController;
use App\Http\Controllers\User\TransactionController as UserTransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/config', function () {
    Artisan::call('storage:link');
    Artisan::call(
        'migrate:fresh',
        [
            '--force' => true
        ]
    );
    Artisan::call(
        'db:seed',
        [
            '--force' => false
        ]
    );
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', [UserBookController::class, 'index']);
Route::get('/book', [UserBookController::class, 'index']);

Route::middleware(['auth', 'isCustomer'])->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::get('/u/add_profile', 'add');
    });

    Route::get('/book/{id}/show', [UserBookController::class, 'show']);

    Route::get('/cart/{id}/show', [UserCartController::class, 'index']);
    Route::post('/cart/{id}/add', [UserCartController::class, 'store']);
    Route::get('/cart/{id}/edit', [UserCartController::class, 'edit']);
    Route::put('/cart/{id}', [UserCartController::class, 'update']);
    Route::delete('/cart/{id}', [UserCartController::class, 'destroy']);

    Route::get('/checkout/{id}/detail', [UserCartController::class, 'checkout_detail']);
    Route::post('/checkout', [UserCartController::class, 'checkout']);

    Route::get('/user/dashboard', [UserHomeController::class, 'index']);
    Route::put('/user/update', [UserSettingController::class, 'update_profile']);

    Route::get('/user/transaction', [UserTransactionController::class, 'transaction']);
    Route::get('/user/transaction/{id}/detail', [UserTransactionController::class, 'transaction_detail']);
    Route::get('/user/transaction/{id}/print', [UserTransactionController::class, 'transaction_print']);

    Route::get('/user/change_password', [UserSettingController::class, 'change_password']);
    Route::put('/user/change_password', [UserSettingController::class, 'update_password']);
});

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::prefix('/u')->group(function () {
        Route::controller(HomeController::class)->group(function () {
            Route::get('dashboard', 'index');
            Route::put('update_profile', 'update_profile');
            Route::get('change_password', 'change_password');
            Route::put('update_password', 'update_password');
        });

        Route::controller(UserController::class)->group(function () {
            Route::get('add_profile', 'add');

            Route::get('admins', 'get_admin');
            Route::post('admins', 'add_admin');
            Route::get('admins/{id}/edit', 'edit_admin');
            Route::put('admins/{id}', 'update_admin');

            Route::get('customers', 'get_customer');

            Route::get('users/create', 'create');
            Route::post('users', 'store');
            Route::delete('users/{id}', 'destroy');
        });

        Route::resource('author', AuthorController::class);

        Route::resource('publisher', PublisherController::class);

        Route::resource('genre', GenreController::class);

        Route::resource('book', BookController::class);

        Route::resource('book2', Book2Controller::class);

        Route::controller(AdminTransactionController::class)->group(function () {
            Route::get('/transaction', 'index');
            Route::get('/transaction/{id}/detail', 'detail');
            Route::get('/transaction/{id}/status', 'status');
            Route::get('/transaction/report', 'report');
        });
        Route::controller(AdminTransaction2Controller::class)->group(function () {
            Route::get('/transaction2', 'index');
            Route::get('/transaction2/{id}/detail', 'detail');
            Route::get('/transaction2/{id}/status', 'status');
            Route::get('/transaction2/report', 'report');
        });
        Route::controller(AdminTransaction3Controller::class)->group(function () {
            Route::get('/transaction3', 'index');
            Route::get('/transaction3/{id}/reject', 'reject');
            Route::get('/transaction3/{id}/status', 'status');
            Route::get('/transaction3/report', 'report');
        });
        Route::controller(AdminTransaction4Controller::class)->group(function () {
            Route::get('/transaction4', 'index');
            Route::get('/transaction4/{id}/reject', 'reject');
            Route::get('/transaction4/{id}/status', 'status');
            Route::get('/transaction4/report', 'report');
        });
        Route::controller(AdminTransaction5Controller::class)->group(function () {
            Route::get('/transaction5', 'index');
            Route::get('/transaction5/{id}/reject', 'reject');
            Route::get('/transaction5/{id}/status', 'status');
            Route::get('/transaction5/report', 'report');
        });
    });
});
