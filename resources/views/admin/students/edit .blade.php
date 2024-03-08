@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Student') }}
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
                    <form action="{{route('students.update', $student-id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Class Name</label>
                              <select class="form-control" name="class_id">
                                @foreach ($classes as $row)
                                <option value="{{ $row->id }}" @if($row-id == $student->class_id) selected @endif >{{ $row->class_name }}</option>
                                @endforeach
                              </select>
                          </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Roll <span class="text-danger">*</span></label>
                            <input type="text" name="roll" class="form-control" value="{{ $student->roll }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Email </label>
                            <input type="email" name="email" class="form-control" value="{{ $student->email }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Student Phone <span class="text-danger">*</span></label>
                            <input type="tel" name="phone" class="form-control"value="{{ $student->phone }}" required>
                        </div>


                          <button type="submit" class="btn btn-primary"></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

