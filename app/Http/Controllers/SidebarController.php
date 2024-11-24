<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SidebarController extends Controller
{
    //NOT AJAX
    public function index(Request $request)
    {
        $user = $request->user();
        return view('index', ['user' => $user]);
    }
    public function appointments(Request $request)
    {
        $user = $request->user();
        return view('appointments', ['user' => $user]);
    }
    public function explore(Request $request)
    {
        $user = $request->user();
        return view('explore', ['user' => $user]);
    }
    public function view(Request $request)
    {
        $user = $request->user();
        return view('view-service', ['user' => $user]);
    }
    public function popular(Request $request)
    {
        $user = $request->user();
        return view('popular', ['user' => $user]);
    }
}
