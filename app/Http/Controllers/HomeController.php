<?php

namespace App\Http\Controllers;
use App\Models\Thietbi;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{

    public function index(){
        return view('layout.clients');
    }




}

