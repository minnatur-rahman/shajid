@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Class') }}
                    <a class="btn btn-danger btn-sm" style="float: right;" href="{{route('class.index')}}">All Class</a>
                </div>

                <div class="card-body">
                    <form action="{{route('store.class')}}" method="POST">
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Class Name</label>
                          <input type="text" name="class_name" class="form-control" id="exampleInputEmail1" placeholder="Class Name">

                        </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

