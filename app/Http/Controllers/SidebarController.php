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
    public function barbershops(Request $request)
    {
        $user = $request->user();
        return view('barbershops', ['user' => $user]);
    }
    public function beautySalons(Request $request)
    {
        $user = $request->user();
        return view('beauty-salons', ['user' => $user]);
    }
    public function nailSalons(Request $request)
    {
        $user = $request->user();
        return view('nail-salons', ['user' => $user]);
    }
    public function hairSalons(Request $request)
    {
        $user = $request->user();
        return view('hair-salons', ['user' => $user]);
    }
    public function faqs(Request $request)
    {

        $user = $request->user();
        return view('faqs', ['user' => $user]);
    }
    public function sendFeedback(Request $request)
    {

        $user = $request->user();
        return view('send-feedback', ['user' => $user]);
    }
    public function reportIssue(Request $request)
    {

        $user = $request->user();
        return view('report', ['user' => $user]);
    }
}
