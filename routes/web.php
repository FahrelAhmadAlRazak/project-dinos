 <?php

use App\Http\Controllers\akunAdminController;
use App\Http\Controllers\DataAkun;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataAkunAdminController;



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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('Dashboard');
})->name('dashboard');

// Route::get('/signUp', function () {
//     return view('signUp');
// });

// Route::get('/signIn', function () {
//     return view('signIn');
// });

Route::get('/about', function () {
    return 'Halaman About';
});

Route::get('/blog', function () {
    return view('post');
});



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/signUp', [App\Http\Controllers\DataAkun::class,'signUp']) ->name('signUp');

Route::post('/signUp', [App\Http\Controllers\DataAkun::class,'signUp_action']) ->name('signUp.action');

Route::get('/signIn', [App\Http\Controllers\DataAkun::class,'signIn']) ->name('signIn');

Route::post('/signIn', [App\Http\Controllers\DataAkun::class,'signIn_action']) ->name('signIn.action');

// Route::get('/home', [App\Http\Controllers\DataAkun::class,'home_page']) ->name('home_page');

//test dashboard ADMIN
Route::get('/dashboard_admin', function () {
    return view('admin/dashboard');
})->name('dashboard_admin');

Route::get('/akun_edit_admin', function () {
    return view('admin/akun_edit');
})->name('akun_edit_admin');

Route::get('/akun_admin', function () {
    return view('admin/akun');
})->name('akun_admin');


//test dashboard Kurir
Route::get('/dashboard_kurir', function () {
    return view('kurir/dashboard');
})->name('dashboard_kurir');

Route::get('/akun_edit_kurir', function () {
    return view('kurir/akun_edit');
})->name('akun_edit_kurir');

Route::get('/akun_kurir', function () {
    return view('kurir/akun');
})->name('akun_kurir');

//test dashboard Mitra
Route::get('/dashboard_mitra', function () {
    return view('mitra/dashboard');
})->name('dashboard_mitra');

Route::get('/akun_edit_mitra', function () {
    return view('mitra/akun_edit');
})->name('akun_edit_mitra');

Route::get('/akun_mitra', function () {
    return view('mitra/akun');
})->name('akun_mitra');



// Route::get('akun_admin', index() {
//     return view('admin/akun', ['data' => $dataAkunAdmin]);
// });

// Route::get('admin/akun', [App\Http\Controllers\akunAdminController::class,'show']) ->name('show');
// Route::get()
// Route::view('');
Route::get('/akun_admin',[akunAdminController::class,'show'])->name('show');



Auth::routes();

Route::controller(akunAdminController::class)->prefix('auth/register')->group(function(){

    Route::get('auth/register', [App\Http\Controllers\akunAdminController::class,'show_kota']) ->name('show_kota');

    Route::post('auth/register', [App\Http\Controllers\akunAdminController::class,'show_kota_post']) ->name('show_kota_post');

    Route::get('auth/register', [App\Http\Controllers\akunAdminController::class,'show_provinsi']) ->name('show_provinsi');

    Route::post('auth/register', [App\Http\Controllers\akunAdminController::class,'show_provinsi_post']) ->name('show_provinsi_post');
    
    

    
});

Route::post('auth/register',[akunAdminController::class,'show'])->name('register');

