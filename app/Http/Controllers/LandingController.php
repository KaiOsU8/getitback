<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function landingpage()
    {
        if (Auth::id()) {
            $usertype = Auth()->user()->usertype;

            if ($usertype == 'admin') {
                return view('admin.dashboard');
            } 
            else if ($usertype == 'user') {
                return view('user.dashboard');
            }
            else {
                return view('login');
            }
        }
    }
}