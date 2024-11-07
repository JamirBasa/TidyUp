<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function upcoming(Request $request)
    {
        $user = $request->user();
        return view('user-layout', ['appointmentView' => 'upcoming', 'user' => $user]);
    }

    public function upcomingContent(Request $request)
    {
        $user = $request->user();
        if($request->ajax()) {
            return view('partial.appointmentsPartial.upcoming', ['user' => $user]);
        }
        return redirect()->route('upcoming');
    }
}
