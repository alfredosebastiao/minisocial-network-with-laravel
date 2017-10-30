@extends('layouts.app')

@section('content')
    @forelse($todosPosts as $post)

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>Alfredo Sebastiao</span>

                </div>
                <div class="panel-body">
                    {{ $post->shortContent }}
                    <a href="/posts/{{ $post->id }}">Read more</a>
                </div>
                <div class="panel-footer clearfix" style="background-color: white">
                    <span class="pull-right">{{ $post->created_at->diffForHumans() }}</span>
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