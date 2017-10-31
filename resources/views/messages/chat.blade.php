@extends('layouts.app')

@section('content')
    @include('messages.form_criar_mensagem')
    <div class="col-md-6 col-md-offset-3 clearfix">
        @forelse($mensagens as $mensagem)
            @if($mensagem->emissor_id == \Illuminate\Support\Facades\Auth::user()->id )
                <div class="col-md-6 col-md-offset-1 pull-right">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <span class="pull-right clearfix">EU</span>
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
            @else
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading clearfix">
                            <span class="pull-right clearfix">{{ $mensagem->name }}</span>
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
            @endif
        @empty

            <div class="col-md-6 col-md-offset-3">
                <p>Nenhuma Mensagem</p>
            </div>

        @endforelse
    </div>

    {{--<div class="row">--}}
    {{--<div class="col-md-6 col-md-offset-3">--}}

    {{--</div>--}}
    {{--</div>--}}
@endsection