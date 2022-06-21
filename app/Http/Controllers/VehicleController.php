<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function index() {
        $vehicles = Vehicle::all();
        
        return view('vehicles')->with('vehicles', $vehicles);
    }
}
