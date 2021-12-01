<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function NKT_form() {
        return view('CRG.NKT_form');
    }

    public function form() {
        return view('pages.profile.form');
    }
}
