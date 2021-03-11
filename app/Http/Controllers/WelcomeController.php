<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index() {
        $status = Status::orderBy('id','desc')->get();
        return view('public',['status' => $status]);
    }
}
