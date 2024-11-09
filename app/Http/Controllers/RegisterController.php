<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function regis()
    {
        return view('register');
    }

    public function learn()
    {
        return view('livewire.learning-path');
    }

    public function trans()
    {
        return view('livewire.transfrom');
    }
}

