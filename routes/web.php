<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\PermissionController;
use App\Http\Controllers\Backend\UserController;

use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\TableController;
use App\Http\Controllers\Backend\PlaceController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ReservationController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TokenController;
use App\Http\Controllers\Backend\TestController;
use App\Http\Controllers\Backend\OrderController;


// Start Frontend Routes

    //Home Page
    Route::get('/', [HomeController::class, 'index'])->name('/');

    //Main Menu By Category
    Route::get('menu', [HomeController::class, 'menu'])->name('menu');

    //Product by Category
    Route::get('/category/{id}', [HomeController::class, 'category']);

    // Reservation
    Route::get('reservation', [HomeController::class, 'reservation']);


    // Orders
    Route::get('orders', [HomeController::class, 'orders'])->name('orders');
    Route::post('order', [HomeController::class, 'create'])->name('order.create');
    Route::post('/order/updateQuantity', [HomeController::class, 'updateQuantity'])->name('updateQuantity');
    Route::get('/order/destroy/{id}', [HomeController::class, 'destroy'])->name('destroy');
    // Route::get('/order/clearCart', [HomeController::class, 'clearCart'])->name('clearCart');

// End Front Routes


// Start Backend Routes

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {


    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('posts', PostController::class);
    Route::resource('pages', PageController::class);
    Route::resource('clients', ClientController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('reservations', ReservationController::class);


    Route::resource('places', PlaceController::class);
    Route::resource('tables', TableController::class);

    Route::resource('products', ProductController::class);
    Route::resource('messages', MessageController::class);
    // Route::resource('orders', OrderController::class);

    //Orders
    // Route::get('orders', [OrderController::class, 'index'])->name('orders');
    Route::get('orders', [OrderController::class, 'orders'])->name('orders');

    // Route::get('orders', [OrderController::class, 'Adminindex']);
    Route::get('order/edit/{id}', [OrderController::class, 'edit']);
    Route::post('order/update/{id}', [OrderController::class, 'update']);

    // Route::delete('/deleteimage/{id}', [PostController::class, 'deleteimage']);


    // Settings Route

    Route::group(['prefix' => 'setting'], function () {
        Route::get('general', [SettingController::class, 'general'])->name('setting.general');
        Route::post('general', [SettingController::class, 'store'])->name('setting.store');

        Route::get('networks', [SettingController::class, 'networks'])->name('setting.networks');
        Route::post('networks', [SettingController::class, 'save_network'])->name('networks.store');
        Route::get('network/show/{id}', [SettingController::class, 'show_network'])->name('network.show');
        Route::get('network/edit/{id}', [SettingController::class, 'edit_network'])->name('network.edit');
        Route::delete('network/destroy{id}', [SettingController::class, 'destroy'])->name('network.destroy');
    });


    // Api Tokens
    Route::get('tokens', [TokenController::class, 'index'])->name('tokens');
    // Route::get('/token/create', [TokenController::class, 'showTokenForm'])->name('token.showForm');
    Route::post('/token/create', [TokenController::class, 'create'])->name('token.create');
    Route::delete('/token/delete/{token}', [TokenController::class, 'destroy'])->name('token.destroy');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('currency', [DashboardController::class, 'currency'])->name('currency');


    Route::resource('test', TestController::class);





});
