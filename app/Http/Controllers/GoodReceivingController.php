<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodReceivingController extends Controller
{
    public function index(){
        return view("WHM.Good_receiving.index");
    }

    public function Receive(){
        return view("WHM.Good_receiving.receive");
    }
}
