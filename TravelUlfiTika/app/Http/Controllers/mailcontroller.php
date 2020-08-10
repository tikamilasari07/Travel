<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

class mailcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mail(Request $request){
        return view('email.sendemail');
    }
    public function sendmail(Request $request)
    {
        /*$user =User::find(1);
        Mail::send('mails.reminder',['user' => $user] function($mail) use($user){
            $mail->from('ulfiad99@mail.com', 'ulfiana');
            $mail->to($user->email,$user->nama);
        });
    }*/
        try {
        Mail::send ('email.email',['nama'=> $request->nama,'pesan'=>$request->pesan],
            function($message)use($request){
                $message->subject($request->judul);
                $message->from('ulfiad99@gmail.com','Ulfiana Dewi');
                $message->to($request->email);

            });
        return back()->with('alert->success','Berhasil kirim email');
        } catch (Exception $e) {
            return response(['status'=>false,'errors'=>$e->getMessage()]);
        }         
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
        //
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
