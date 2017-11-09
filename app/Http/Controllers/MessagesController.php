<?php

namespace App\Http\Controllers;

use App\message;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;



class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     /*  $mensajes = DB::table('messages')->get(); */
      /* $mensajes = Message::all()->where('nombre','=' ,"jvalle"); */

      $mensajes = Message::all();
      
       return view('messages.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       //Guardar el mensaje

        /* 
            DB::table('messages')->insert(
            [
                "nombre" => $request->input('nombre'),
                "email" => $request->input('email'),
                "mensaje" => $request->input('mensaje'),
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
         */
        
//Metodo 1
            $mensaje = new Message;
            $mensaje->nombre = $request->input('nombre');
            $mensaje->email = $request->input('email');
            $mensaje->mensaje = $request->input('mensaje');
            $mensaje->created_at = Carbon::now();
            $mensaje->updated_at = Carbon::now();
            $mensaje->save():

        //Redireccionar
        return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje = DB::table('messages')->where('id', $id)->first();

        return view('messages.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $mensaje = DB::table('messages')->where('id', $id)->first();
        return view('messages.edit', compact('mensaje'));
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
        //Actualizamos
            DB::table('messages')->where('id', $id)->update(
[
                "nombre" => $request->input('nombre'),
                "email" => $request->input('email'),
                "mensaje" => $request->input('mensaje'),
                "updated_at" => Carbon::now(),
]
            );

        //Redireccionamos

            return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         DB::table('messages')->where('id', $id)->delete();
        return redirect()->route('mensajes.index');
    }
}
