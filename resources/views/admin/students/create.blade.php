@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Student') }}
                    <a class="btn btn-danger btn-sm" style="float: right;" href="{{route('students.index')}}">All Student</a>
                </div>

                <div class="card-body">
                    <div align="center" style="padding-top: 30px;">
                        @if(session()->has('success'))
                           <div class="alert alert-success">
                             <strong class="text-success">{{ session()->get('success') }}</strong>
                           </div>
                        @endif
                    </div>
                    <form action="{{route('students.store')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Class Name</label>
                              <select class="form-control" name="class_id">
                                @foreach ($classes as $row)
                                <option value="{{ $row->id }}">{{ $row->class_name }}</option>
                                @endforeach
                              </select>
                          </div>

                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Student Name <span class="text-danger">*</span></label>
                          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                          id="exampleInputEmail1" placeholder="Class Name" value="{{old('name')}}" required>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    {{-- <strong>{{$messege}}</strong> --}}
                                </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Roll <span class="text-danger">*</span></label>
                            <input type="text" name="roll" class="form-control @error('roll') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Class roll" value="{{old('roll')}}" required>
                              @error('roll')
                                  <span class="invalid-feedback" role="alert">
                                      {{-- <strong>{{$messege}}</strong> --}}
                                  </span>
                              @enderror
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Email </label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Student Email" value="{{old('email')}}">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      {{-- <strong>{{$messege}}</strong> --}}
                                  </span>
                              @enderror
                          </div>

                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Phone <span class="text-danger">*</span></label>
                            <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror"
                            id="exampleInputEmail1" placeholder="Student Phone" value="{{old('phone')}}">
                              @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                      {{-- <strong>{{$messege}}</strong> --}}
                                  </span>
                              @enderror
                          </div>


                          <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

