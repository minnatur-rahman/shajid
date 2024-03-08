@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Students') }}
                    <a class="btn btn-primary btn-sm" style="float: right;" href="{{route('students.create')}}">Add New Student</a>
                </div>
                <div class="card-body">
                    <div align="center" style="padding-top: 30px;">
                        @if(session()->has('success'))
                           <div class="alert alert-success">
                             <strong class="text-success">{{ session()->get('success') }}</strong>
                           </div>
                        @endif
                    </div>
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
                                <td>{{ $row->roll }}</td>
                                <td>{{ $row->name }}</td>
                                <td>{{ $row->phone }}</td>
                                <td>{{$row->class_id}}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('students.show', $row->id) }}">View</a>
                                    <a class="btn btn-info" href="{{ route('students.edit', $row->id) }}">Edit</a>
                                    <form action="{{ route('students.destroy', $row->id) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <BUtton type="submit" class="btn btn-sm btn-danger">Delete</BUtton>
                                    </form>
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
