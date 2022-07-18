<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function adminHome(){
        return view('pages.admin');
    }
}
