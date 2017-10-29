
@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create post
            </div>
            <div class="panel-body">
                <form method="POST" action="/posts">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}

                    <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id  }}">
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea id="content" name="content" class="form-control"> </textarea>
                    </div>


                    <input type="submit" class="btn btn-success pull-right" >
                </form>
            </div>
        </div>
    </div>
@endsection