<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    //
    public function index(Request $request){
        $user = $request->user();
        
        return view('user-layout', ['user' => $user]);
    }
    public function appointments(Request $request)
    {
        $user = $request->user();
        return view('user-layout', ['currentView' => 'appointments', 'user' => $user]);
    }

    public function homeContent(Request $request)
    {
        $user = $request->user();
        if($request->ajax()) {
            return view('partial.index', ['user' => $user]);
        }
        return redirect()->route('index');
    }

    public function appointmentsContent(Request $request)
    {
        $user = $request->user();
        if($request->ajax()) {
            return view('partial.appointments', ['user' => $user]);
        }
        return redirect()->route('appointments');
    }
}
