<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

/*
|--------------------------------------------------------------------------
| Web Front End
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('frontend.home');
});

Route::get('berita/populer', 'NewsController@berita_polpuler');

/*
|--------------------------------------------------------------------------
| Web Front End
|--------------------------------------------------------------------------
|
*/

Route::get('/register/personal', function () {
    if (!auth()->user()) {
        # code...
        return view('frontend.auth.register_personal');
    } else {
        return redirect('/');
    }
});
Route::get('/register/grup', function () {
    if (!auth()->user()) {
        # code...
        return view('frontend.auth.register_grup');
    } else {
        return redirect('/');
    }
});

Route::post('/register/personal', 'AuthController@register_personal');
Route::post('/register/group', 'AuthController@register_group');


//dashboard
Route::get('/admin/dashboard', 'admin\DashboardController@index')->name('dashboard');

//Payment
Route::get('/admin/payment', 'admin\PaymentController@index')->name('payment');
Route::post('/admin/payment/{id}', 'admin\PaymentController@edit')->name('payment.edit');
Route::get('/admin/payment/create', 'admin\PaymentController@create')->name('payment.create');



//UserPersonal
Route::get('/admin/user/personal', 'admin\UserController@indexPersonal')->name('personal');
Route::get('/admin/user/personal/{id}', 'admin\UserController@editPersonal')->name('personal.edit');
Route::post('/admin/user/personal/{id}', 'admin\UserController@updatePersonal')->name('personal.update');

//UserGrup
Route::get('/admin/user/grup', 'admin\UserController@indexgrup')->name('grup');

//price
Route::get('/admin/price', 'admin\PriceController@index')->name('price');
Route::get('/admin/price/create', 'admin\PriceController@create')->name('price.create');
Route::get('/admin/price/{id}', 'admin\PriceController@edit')->name('price.edit');
Route::get('/admin/price/hapus/{id}', 'admin\PriceController@destroy')->name('price.destroy');
Route::post('/admin/price/', 'admin\PriceController@store')->name('price.store');
Route::post('/admin/price/{id}', 'admin\PriceController@update')->name('price.update');


//Rekening
Route::get('/admin/rekening', 'admin\RekeningController@index')->name('rekening');
Route::get('/admin/rekening/create', 'admin\RekeningController@create')->name('rekening.create');
Route::get('/admin/rekening/{id}', 'admin\RekeningController@edit')->name('rekening.edit');
Route::post('/admin/rekening/', 'admin\RekeningController@store')->name('rekening.store');
Route::post('/admin/rekening/{id}', 'admin\RekeningController@update')->name('rekening.update');
Route::get('/admin/rekening/hapus/{id}', 'admin\RekeningController@destroy')->name('rekening.destroy');


Route::get('/logout', 'AuthController@logout');
Route::get('/login', function () {
    if (!auth()->user()) {
        # code...
        return view('frontend.auth.login');
    } else {
        return redirect('/');
    }
})->name('login');

Route::post('login/setup', 'AuthController@login_post');

Route::group(['middleware' => ['auth', 'CheckRole: 0, 1']], function(){

    Route::get('/profile', function () {
        return view('frontend.member.profile');
    });
    Route::get('member/anggota/{user_id}', 'MemberController@member_anggota_id');
    Route::get('member/data-anggota', 'MemberController@member_anggota');
    Route::get('member/delete-anggota/{user_id}', 'MemberController@delete_anggota');
    Route::post('member/create-anggota-group', 'MemberController@create_anggota_group');
    Route::post('member/update-anggota', 'MemberController@update_anggota');

});

Route::get('/activation-account/{encrypt}', 'AuthController@activation_account');

