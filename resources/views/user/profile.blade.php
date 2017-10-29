@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img src="http://data.whicdn.com/images/64881973/large.jpg">
                <h1>{{ $user->username }}</h1>
                <h5>{{ $user->email }}</h5>
                <h5>{{ $user->dob->format('l j F Y') }} ( {{ $user->dob->age }} years old)</h5>
            </div>
        </div>
    </div>
   
@endsection