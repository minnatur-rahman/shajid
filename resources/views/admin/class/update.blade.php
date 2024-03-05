@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Edit Class') }}
                    <a class="btn btn-danger btn-sm" style="float: right;" href="{{route('class.index')}}">All Class</a>
                </div>

                <div class="card-body">
                    @if(session()->has('success'))
                    <strong class="texe-success">{{ session()->get('success') }}</strong>
                    @endif
                    <form action="{{route('class.update')}}" method="POST">
                          @csrf
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Class Name</label>
                          <input type="text" name="class_name" class="form-control @error('class_name') is-invalid @enderror"
                          id="exampleInputEmail1" placeholder="Class Name" value="{{old('class_name')}}">
                            @error('class_name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{$messege}}</strong> --}}
                                </span>
                            @enderror
                        </div>
                          <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

