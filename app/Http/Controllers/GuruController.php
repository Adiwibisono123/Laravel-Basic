<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    function index() {
        return "Text";
    }
    function end() {
        return view("Guru");
    }
}
