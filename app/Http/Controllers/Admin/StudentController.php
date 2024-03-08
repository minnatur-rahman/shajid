<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $students = DB::table('students')->orderby('roll','ASC')->get();
       return view('admin.students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classes = DB::table('classes')->get();
        return view('admin.students.create', compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'roll' => 'required',
        ]);
        $data=array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roll' => $request->roll,
        );
        DB::table('students')->insert($data);
        return redirect()->back()->with('success', 'Successfully Inserted');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
       $student = DB::table('students')->where('id',$id)->first();
       return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $classes = DB::table('classes')->get();
        $student = DB::table('students')->where('id',$id)->first();
        return view('admin.students.edit', compact('classes', 'student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $request->validate([
            'class_id' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'roll' => 'required',
        ]);

        $data=array(
            'class_id' => $request->class_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'roll' => $request->roll,
        );
        DB::table('students')->where('id',$id)->update($data);
        return redirect()->route('students.index')->with('success', 'Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
       DB::table('students')->where('id', $id)->delete();
       return redirect()->back()->with('success', 'Successfully Deleted');
    }
}
