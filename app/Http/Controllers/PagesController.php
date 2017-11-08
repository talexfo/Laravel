<?php



namespace App\Http\Controllers;


use App\Http\Requests\CreateMessageRequest;


class PagesController extends Controller
{

public function __construct()
{
  
/* $this->middleware('example',['only'=>['contactos']]);*/

/*  $this->middleware('example', ['only' => [
            'inicio',
        ]]); */

}



public function mensajes(CreateMessageRequest $request)
{
  $data =  $request->all();


  /* return redirect('/'); */

 /*  return redirect()
        ->route('contactos')
        ->with('info', 'Tu mensaje ha sido enviado correctamente'); */

        return back()->with('info', 'Tu mensaje ha sido enviado correctamente');
 
  
}




  public function inicio()
  {
  	# code...
  	return view('home');
  }


  public function contactos()
  {
  	# code...

  	return view('contactos');
  }


  public function saludos($nombre = "Invitado")
  {
  	# code...
return view('saludos', compact('nombre'));

  }


}
