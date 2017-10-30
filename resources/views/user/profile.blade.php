@extends('layouts.app')
<style>
    .profile-img{
        max-width: 150px;
        border: 5px solid #fff;
        border-radius: 100%;
        box-shadow: 0 2px 2px rgba(0,0,0,0.3);
    }
</style>
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <img class="profile-img" src="https://www.neolutionesport.com/wp-content/uploads/2017/03/default-avatar-knives-ninja.png">
                <h1>{{ $user->username }}</h1>
                <h5>{{ $user->email }}</h5>
                <h5>{{ $user->dob->format('l j F Y') }} ( {{ $user->dob->age }} years old)</h5>
                <button class="btn btn-success">Edit</button>
            </div>
        </div>
    </div>
   
@endsection