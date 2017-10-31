<?php

namespace App\Http\Controllers;

use App\Message;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'No index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users = User::all();
        $message = null;


//        foreach ($users as $user){
//            $message = DB::table('messages')
//                ->where('emissor_id','=',3)
//                ->where('receptor_id','=',$id)
//                ->orderBy('messages.id','desc')
//                ->first();

        $mensagens = collect();
        foreach ($users as $user){

            $message = Message::select('messages.id','mensagem','messages.created_at','users.username','users.name')
                ->where('emissor_id','=',$user->id)
                ->where('receptor_id','=',$id)
                ->join('users','users.id','=','emissor_id')
                ->orderBy('id','desc')
                ->paginate(10)
                ->first();
            if($message){
                $mensagens->push($message);
            }
            $message = null;
           // echo $message;
        }
//

       return view('messages.index',compact('mensagens'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
