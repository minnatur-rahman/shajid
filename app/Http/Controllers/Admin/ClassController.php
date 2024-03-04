<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;


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
        $class = DB::table('classes')->get();
        return view('admin.class.index', compact('class'));
    }
    //create method
    public function create(){
        return view('admin.class.create');
    }
    //store class
    public function store(Request $request){
        $request->validate([
            'class_name' => 'required|unique:classes',
        ]);
        $data=array(
            'class_name' => $request->class_name,
        );
        DB::table('classes')->insert($data);
        return redirect()->back()->with('success', 'successfully inserted');

    }
}
