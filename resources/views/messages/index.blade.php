@extends('layouts.app')

@section('content')
    @forelse($mensagens as $mensagem)

        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span>{{ $mensagem->name }}</span>
                </div>
                <div class="panel-body">
                    {{ $mensagem->shortContent }}
                </div>
                <div class="panel-footer clearfix" style="background-color: white">
                    <span class="pull-left">
                        <i class="fa fa-clock-o"></i>
                        {{ $mensagem->created_at->diffForHumans() }}
                    </span>

                    <span class="pull-right">
                        <a class=" btn btn-success">Ler mais...</a>
                    </span>
                </div>
            </div>
        </div>
    @empty
        <p>Nemhuma Messangem por Ler</p>
    @endforelse
    {{--<div class="row">--}}
    <div class="col-md-6 col-md-offset-3">
        {{--{{ $mensagens->links() }}--}}
    </div>
    {{--</div>--}}
@endsection