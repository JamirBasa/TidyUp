<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function bookNow(Request $request)
    {
        $user = $request->user();

        return view('booking.book-appointment', ['user' => $user]);
    }
    public function bookNow2(Request $request)
    {
        $user = $request->user();

        return view('booking.book-appointment2', ['user' => $user]);
    }

    public function bookNow3(Request $request)
    {
        $user = $request->user();

        return view('booking.book-appointment3', ['user' => $user]);
    }

    public function bookNow4(Request $request)
    {
        $user = $request->user();

        return view('booking.book-appointment4', ['user' => $user]);
    }
}
