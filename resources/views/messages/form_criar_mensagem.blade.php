
{{--@section('content')--}}
    <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-default">
            <div class="panel-body">
                <form method="POST" action="/chats">
                    {{ csrf_field() }}
                    {{--{{ $mensagens[0]->mensagem }}--}}
                    <input type="hidden" name="emissor_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id  }}">
                    {{--<input type="hidden" name="receptor_id" value="{{ $mensagens[0]->receptor_id  }}">--}}

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea id="mensagem" name="mensagem" class="form-control"> </textarea>
                    </div>

                    <input type="submit" class="btn btn-success pull-right" >
                </form>
            </div>
        </div>
    </div>
{{--@endsection--}}