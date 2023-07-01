<?php

namespace App\Http\Controllers;
use Mail;
use App\Mail\PruebaMail;
use Illuminate\Http\Request;
use App\Models\Form_contact;
use App\Http\Controllers\PruebaMailController;



class ContactController extends Controller
{
    public function index()
    {

        return view('contact.index');
    }

    public function insertMenssage(Request $request){
        
        $request->all();
     
        $user_contact = $request->input('user_contact');
        $email_contact = $request->input('email_contact');
        $telephone = $request->input('telephone');
        $message = $request->input('message');
     
        
        $insertmessage= Form_contact::insert(['user_contact'=>$user_contact,
        'email_contact'=>$email_contact,
        'telephone'=>$telephone,
        'message'=>$message,

         ]); 


        $Message_enviado = new PruebaMailController();

        $Message_enviado->enviarMessage($user_contact);
        /* $mailData= [
        'title'=> 'Mail from my Laravel app',
           'user'=>$user_contact,
            'body'=> 'Recibimos tu mensaje en breve recibiremos comunicaremos contigo.'
        ];

        // $adjunto = PDFController::generatePDF();
                                
        Mail::to('josegerardoar@gmail.com')->send(new PruebaMail($mailData));
        echo 'Mensaje enviado'; */
  
        return redirect('/listaEmployees');
    }




}
