<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Stock_Transfer_locationController extends Controller
{
    public function index(){
        return view("WHM.Stock_Transfer_location.index");
    }
}
