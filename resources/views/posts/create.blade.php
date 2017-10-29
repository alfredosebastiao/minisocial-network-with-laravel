@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                Create post
            </div>
            <div class="panel-body">
                <form>
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