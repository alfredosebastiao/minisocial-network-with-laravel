@extends('layouts.app')

@section('content')
    @forelse($mensagens as $mensagem)

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading clearfix">
                    {{--{{ $id = \Illuminate\Foundation\Auth\User::user()->id }}--}}
                    @if($mensagem->emissor_id == \Illuminate\Support\Facades\Auth::user()->id )
                        <span class="pull-right clearfix">EU</span>
                    @else
                        <span class="pull-left">{{ $mensagem->name }}</span>
                    @endif
                </div>
                <div class="panel-body">
                    {{ $mensagem->mensagem }}
                </div>
                <div class="panel-footer clearfix" style="background-color: white">
                    <span class="pull-left">
                        <i class="fa fa-clock-o"></i>
                        {{ $mensagem->created_at}}
                    </span>

                </div>
            </div>
        </div>
    @empty

        <div class="col-md-6 col-md-offset-3">
            <p>Nenhuma Mensagem</p>
        </div>

    @endforelse
    {{--<div class="row">--}}
    {{--<div class="col-md-6 col-md-offset-3">--}}
        @include('messages.form_criar_mensagem');
    {{--</div>--}}
    {{--</div>--}}
@endsection