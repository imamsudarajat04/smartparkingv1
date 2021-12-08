<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Place;
use App\Booking;
use App\Vehicle;
use App\Parking;
use App\Payment;
use App\CategoryVehicle;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Requests\BookingRequest;
use App\Http\Requests\VehiclesRequest;
use App\Http\Requests\PaymentsRequest;

class BookingUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.bookings.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersRequest $request, $id)
    {
        $data = $request->all();
        $user = User::find($id);
        $user->update($data);
        return redirect()->route('bookings-user.cekVehicle', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function cekVehicle($userid)
    {
        $user = User::find($userid);
        $category_vehicles = CategoryVehicle::all();
        return view('users.bookings.vehicle', compact('userid', 'category_vehicles'));
    }

    public function vehiclestore(VehiclesRequest $request, $userid)
    {
        $data = $request->all();
        $vehicle = new Vehicle;
        $vehicle->user_id = $userid;
        $vehicle->category_vehicles_id = $request->category_vehicles_id;
        $vehicle->platNumber = $request->platNumber;
        $vehicle->save();
        return redirect()->route('cek-booking.cekBooking', $userid);
    }

    public function cekBooking($userid)
    {
        $places = Place::all();
        $vehicles = Vehicle::where('user_id', $userid)->get();
        return view('users.bookings.booking', compact('places', 'vehicles'));
    }

    public function bookingstore(BookingRequest $request, $userid)
    {
        $booking = new Booking;
        $booking->user_id = $userid;
        $booking->place_id = $request->place_id;
        $booking->vehicle_id = $request->vehicle_id;
        $booking->quantity = $request->quantity;
        $booking->status = $request->status;
        $booking->save();

        return redirect()->route('cek-all.cekall', $userid);
    }

    public function cekall($userid)
    {
        return view('users.bookings.cekall');
    }

    public function totalbooking($userid)
    {
        $booking = Booking::where('user_id', $userid)->first();
        $bookings = Booking::where('user_id', $userid)->get();
        $vehicle = Vehicle::where('user_id', $userid)->first();
        $category_vehicle = CategoryVehicle::where('id', $vehicle->category_vehicles_id)->first();
        $parking = Parking::where('id', $booking->place_id)->where('category_vehicle_id', $category_vehicle->id)->first();
        return view('users.bookings.total', compact('bookings', 'booking', 'category_vehicle','parking'));
    }

    public function pembayaran($userid)
    {
        $booking = Booking::where('user_id', $userid)->first();
        $bookings = Booking::where('user_id', $userid)->get();
        $vehicle = Vehicle::where('user_id', $userid)->first();
        $category_vehicle = CategoryVehicle::where('id', $vehicle->category_vehicles_id)->first();
        $parking = Parking::where('id', $booking->place_id)->where('category_vehicle_id', $category_vehicle->id)->first();
        return view('users.bookings.pembayaran', compact('bookings', 'booking', 'category_vehicle','parking'));
    }

    public function pembayaranstore(PaymentsRequest $request, $userid)
    {
        $payment = new Payment;
        $payment->user_id = $request->user_id;
        $payment->booking_id = $request->booking_id;
        $payment->payment_method = $request->payment_method;
        $payment->transferPhoto = $request->file('transferPhoto')->store('img', 'public');
        $payment->payment_date = $request->payment_date;
        $payment->status = $request->status;
        $payment->save();
        
        return redirect()->route('cek-all.cekall', $userid);
    }
}
