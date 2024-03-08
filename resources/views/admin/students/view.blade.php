@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Student Details') }}
                    <a class="btn btn-danger btn-sm" style="float: right;" href="{{route('students.index')}}">All Student</a>
                </div>

                <div class="card-body">
                   <ul class="class-list">
                       <li class="class-item">Name : {{ $student->name }}</li>
                       <li class="class-item">Class : {{ $student->class_id }}</li>
                       <li class="class-item">Roll : {{ $student->roll }}</li>
                       <li class="class-item">Phone : {{ $student->phone }}</li>
                       <li class="class-item">Email: {{ $student->email }}</li>
                   </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
