@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('All Class') }}
                    <a class="btn btn-primary btn-sm" style="float: right;" href="{{route("create.class")}}">Add New</a>
                </div>
                <div class="card-body">

                    <table class="table table-responsive table-stripe">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Class Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($class as $key => $row)
                            <tr>
                                <td>{{++$key }}</td>
                                <td>{{$row->class_name}}</td>
                                <td>
                                    <a class="btn btn-danger" href="{{ route('class.edit',$row->id) }}">Edit</a>
                                    <a class="btn btn-success" href="{{ route('class.delete',$row->id) }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $class->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
