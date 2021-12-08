<?php

use App\Vehicle;
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
    return view('welcome');
});

//Register
Route::get('/register', "RegisterController@index")->name('register.index');
Route::post('/register/store', "RegisterController@store")->name('register.store');

//Auth
Route::get('/login', "LoginController@index")->name('login');
Route::post('/login/store', "LoginController@store")->name('login.store');
Route::get('/logout', "LoginController@destroy")->name('logout.destroy');


Route::group(['middleware' => ['auth','CekRole:Admin']], function() {
    Route::get('/admin', "AdminController@index")->name('admin.index');

    //Users Controller
    Route::resource('/users', "UserController");

    //Place Controller
    Route::resource('/places', "PlaceController");

    //Categories Controller
    Route::resource('/categories-vehicle', "CategoriesVehicleController");

    //Vehicle Controller
    Route::resource('/vehicles', "VehiclesController");

    //Parking Controller
    Route::resource('/parkings', "ParkingController");

    //Bookings Controller
    Route::resource('/bookings', "BookingController");

    //Payments Controller
    Route::resource('/payments', "PaymentController");

    //GET Plat Nomor by User
    Route::get('getVehicle/{id}', function($id) {
        $vehicle = Vehicle::where('user_id', $id)->get();
        return response()->json($vehicle);
    });

    //Bookings Users Controller
    Route::resource('/bookings-user', "BookingUsersController");
    Route::get('/cek-vehicle/{userid?}', "BookingUsersController@cekVehicle")->name('bookingsf-user.cekVehicle');
    Route::post('/cek-vehicle/store/{userid?}', "BookingUsersController@vehiclestore")->name('cek-vehicle.vehiclestore');
    Route::get('/cek-booking/{userid?}', "BookingUsersController@cekBooking")->name('cek-booking.cekBooking');
    Route::post('/cek-booking/store/{userid?}', "BookingUsersController@bookingstore")->name('cek-booking.bookingstore');
    Route::get('/cek-all/{userid?}', "BookingUsersController@cekall")->name('cek-all.cekall');
    Route::get('/total-booking/{userid?}', "BookingUsersController@totalbooking")->name('total-booking.totalbooking');
});

Route::group(['middleware' => ['auth','CekRole:Admin,Users']], function() {
    //Halaman Parkir Cek User
    Route::get('/halaman-parkir', "HalamanParkingController@index")->name('halaman-parkir.index');

    //Bookings Users Controller
    Route::resource('/bookings-user', "BookingUsersController");
    Route::get('/cek-vehicle/{userid?}', "BookingUsersController@cekVehicle")->name('bookings-user.cekVehicle');
    Route::post('/cek-vehicle/store/{userid?}', "BookingUsersController@vehiclestore")->name('cek-vehicle.vehiclestore');
    Route::get('/cek-booking/{userid?}', "BookingUsersController@cekBooking")->name('cek-booking.cekBooking');
    Route::post('/cek-booking/store/{userid?}', "BookingUsersController@bookingstore")->name('cek-booking.bookingstore');
    Route::get('/cek-all/{userid?}', "BookingUsersController@cekall")->name('cek-all.cekall');
    Route::get('/total-booking/{userid?}', "BookingUsersController@totalbooking")->name('total-booking.totalbooking');
    Route::get('/pembayaran/{userid?}', "BookingUsersController@pembayaran")->name('pembayaran.pembayaran');
    Route::post('/pembayaran/store/{userid?}', "BookingUsersController@pembayaranstore")->name('pembayaran.pembayaranstore');
});