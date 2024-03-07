@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Students') }}
                    <a class="btn btn-primary btn-sm" style="float: right;" href="{{route("students.create")}}">Add New Student</a>
                </div>
                <div class="card-body">

                    <table class="table table-responsive table-stripe">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Roll</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Class Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key => $row)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->roll }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{$row->class_name}}</td>
                                <td>
                                    <a class="btn btn-danger" href="">Edit</a>
                                    <a class="btn btn-success" href="">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection