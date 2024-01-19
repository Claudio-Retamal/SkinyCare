<?php

use App\Http\Controllers\Admin\ServiciosController;
use App\Http\Controllers\Admin\ZonasController;
use App\Http\Controllers\ComprasController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiciosFemeninosController;
use App\Http\Controllers\ServiciosMasculinosController;
use App\Http\Controllers\TratamientosController;

use App\Http\Controllers\SessionsController;

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

// Route::get('/', function () {
//     echo('fff');
// });



// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


            

//  Route::get('/', function () {return redirect('sign-in');})->middleware('guest');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('index');
});

Route::get('Fotodepilacion-Masculina', [ServiciosMasculinosController::class, 'FotodepilacionMasculina']);
Route::get('Promocion-Masculina', [ServiciosMasculinosController::class, 'PromocionMasculina']);
Route::get('Individuales-Masculino', [ServiciosMasculinosController::class, 'IndividualesMasculino']);
//Women
Route::get('Fotodepilacion-Femenina', [ServiciosFemeninosController::class, 'FotodepilacionFemenina']);
Route::get('Promocion-Femenina', [ServiciosFemeninosController::class, 'PromocionFemenina']);
Route::get('Individuales-Femenino', [ServiciosFemeninosController::class, 'IndividualesFemenino']);
//Tratamientos
Route::get('Tratamientos', [TratamientosController::class, 'Tratamientos']);
///MENU
//contact
Route::get('Contacto', [MenuController::class, 'Contacto']);
//nosotros
Route::get('Nosotros', [MenuController::class, 'Nosotros']);
//compras
Route::get('Carro', [ComprasController::class, 'Carro']);
//-----------------------------------------------------------------
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify'); 
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');

Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');

//Midleware
Route::group(['middleware' => 'auth'], function () {
		
	Route::get('billing', function () {
		return view('pages.billing');
	})->name('billing');
	// Route::get('tables', function () {
	// 	return view('pages.tables');
	// })->name('tables');

	// Route::get('tables-2', function () {
	// 	return view('pages.tables-2');
	// })->name('tables-2');

	Route::get('rtl', function () {
		return view('pages.rtl');
	})->name('rtl');
	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('zonas-admin', [ZonasController::class, 'index'])->name('zonas-admin');
	Route::post('zonas-store', [ZonasController::class, 'store'])->name('zonas-store');
	Route::get('servicios-admin', [ServiciosController::class, 'index'])->name('servicios-admin');
	Route::post('servicios-store', [ServiciosController::class, 'store'])->name('servicios-store');

	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});