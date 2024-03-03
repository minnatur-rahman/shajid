@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="" class="btn btn-danger btn-sm">Class</a>
                    <a href="" class="btn btn-success btn-sm">Students</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} {{ Auth::user()->name }}

                    {{-- <a href="{{route('user.details',  Crypt::encryptString('2'))}}" class="btn btn-sm btn-info">Shajid Details</a> --}}
                        <form action="{{route('store.user')}}" method="post">
                            @csrf
                             <div>
                                <label>password</label>
                                <input type="password" name="password" class="form-control" required>
                             </div><br><br>
                             <button class="btn btn-default btn-danger" type="submit">Submit</button>
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
