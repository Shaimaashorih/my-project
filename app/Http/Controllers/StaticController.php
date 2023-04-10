<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Models\Attendance;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index() {
        return view('auth.login');
    }
   
    public function chat() {
        return view('chat');
    }
    public function dash(){
        return view('dash');
    }
    public function login(){
        return view('login');
    }
    
   
   
}
