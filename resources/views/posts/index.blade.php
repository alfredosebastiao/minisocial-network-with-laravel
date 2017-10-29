@extends('layouts.app')
@section('content')
    @forelse($todosPosts as $post)

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Alfredo Sebastiao</span>
                    <span class="pull-right">{{ $post->created_at->diffForHumans() }}</span>
                </div>
                <div class="panel-body">
                    <p>{{ $post->shortContent }}</p>
                </div>
                <div class="panel-footer clearfix" style="background-color: white">
                    <i class="fa fa-heart pull-right"></i>
                </div>
            </div>
        </div>
    @empty
        <p>No Posts</p>
    @endforelse
    {{--<div class="row">--}}
        <div class="col-md-6 col-md-offset-3">
            {{ $todosPosts->links() }}
        </div>
    {{--</div>--}}
@endsection