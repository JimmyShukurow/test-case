<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CarController extends Controller
{
    public function index(){
        $cars = Cache::remember('cars', env('CACHE_TIMEOUT', 30), function (){
            return Car::all();
        });
        return view('cars' , ['cars' => $cars]);
    }
}
