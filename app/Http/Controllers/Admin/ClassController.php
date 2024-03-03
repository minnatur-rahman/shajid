<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // __constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    // index method for all class form database
    public function index()
    {
        echo "done";
    }
}
