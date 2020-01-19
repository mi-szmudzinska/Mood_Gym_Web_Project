<?php

namespace App\Http\Controllers;

use App\Day;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservation.index' , ['days' => Day::all()]);
    }
}
