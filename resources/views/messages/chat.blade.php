@extends('layouts.app')

@section('content')
    @forelse($mensagens as $mensagem)

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{ $mensagem->name }}</span>
                </div>
                <div class="panel-body">
                    {{ $mensagem->mensagem }}
                </div>
                <div class="panel-footer clearfix" style="background-color: white">
                    <span class="pull-left">
                        <i class="fa fa-clock-o"></i>
                        {{ $mensagem->created_at->diffForHumans() }}
                    </span>

                </div>
            </div>
        </div>
    @empty

        <div class="col-md-6 col-md-offset-3">
            <p>Nemhuma Messangem por Ler</p>
        </div>

    @endforelse
    {{--<div class="row">--}}
    {{--<div class="col-md-6 col-md-offset-3">--}}
        @include('messages.form_criar_mensagem');
    {{--</div>--}}
    {{--</div>--}}
@endsection