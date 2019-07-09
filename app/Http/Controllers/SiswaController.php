<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    function Index() {
        return view("Siswa");
    }
    function create() {
        return view("create");
    }
    function edit($id) {
        return view("Hello Siswa". $id);
    }
}