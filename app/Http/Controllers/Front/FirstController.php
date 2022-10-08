<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Front;
use App\Http\Controllers\Controller;

class FirstController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('showData');
    }

    public  function showData(): string
    {
        return 'Data is exist';
    }

    public  function showStudent(): string
    {
        return 'student is exist';
    }
    public  function showDoctor(): string
    {
        return 'Doctor is exist';
    }
}
