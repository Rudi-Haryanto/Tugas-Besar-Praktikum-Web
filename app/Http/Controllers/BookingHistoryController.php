<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingHistoryController extends Controller
{
    public function index()
    {
        return view('booking-history.index', [
            'bookings' => Booking::all()
        ]);
    }

    public function show(Booking $booking)
    {
        return view('booking-history.index', [
            'booking' => $booking
        ]);
    }
}
