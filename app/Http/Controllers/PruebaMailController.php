<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\PruebaMail;
use App\Mail\EnvioMessage;
use App\Http\Controllers\PDFController;
use PDF;
use App\Models\Employee;
class PruebaMailController extends Controller
{
    //
    public function index(){
        $mailData= [
            'title'=> 'Mail from my Laravel app',
            'body'=> 'This is a test from my Laravel App'
        ];

       // $adjunto = PDFController::generatePDF();
                                
        Mail::to('josegerardoar@gmail.com')->send(new PruebaMail($mailData));
        echo 'Mensaje enviado';
    }

            
    public function enviarMessage($user_contact){
     
        $mailData= [
            'title'=> 'Mail from my Laravel app',
               'user'=>$user_contact,
                'body'=> 'Recibimos tu mensaje en breve recibiremos comunicaremos contigo.'
            ];
       // $adjunto = PDFController::generatePDF();
                                
        Mail::to('josegerardoar@gmail.com')->send(new EnvioMessage($mailData));
        echo 'Mensaje enviado';
    }






    public function pruebaMailAdjunto(){

        $mailData= [
            //'mail'=>'paola@3ct.mx ',
            'mail'=>'josegerardoar@gmail.com ',
            'title'=> 'Jose Gerardo A.',
            'body'=> 'This is a test from my Laravel App'
        ];

        $employees = Employee::where('EmployeeID',1)->first();

        $title = 'alta empleado';
        $date = date("Y/m/d");
        $pdf = PDF::loadView('employees.pdfprueba',
        array('title'=> $title,'date' => $date, 'employees' =>$employees));
        Mail::send('mails.adjunt',$mailData,function ($message) use($mailData,$pdf){

        $message->to($mailData['mail'])
                ->subject($mailData['title'])
                ->attachData($pdf->output(),"test.pdf");
        });

        dd('Email enviado');

    }

    public function emailEmployee($id){

        $employees = Employee::select('EmployeeID', 'LastName', 'FirstName','Title','EmailEmployee' )
        ->where('EmployeeID', $id)
        ->get();

        foreach ($employees as $employee){

            $EmailEmployee = $employee->EmailEmployee;
        }
        

        $mailData= [
            'mail'=>$EmailEmployee,
            'title'=> 'Mail from my Laravel app',
            'body'=> 'Este correo es enviado automaticamente, porfavor no contestar'
        ];
        //view('mails.prueba', compact('mailData'));

        $title = 'Bienvenido';
        $date = date("Y/m/d");
        //$pdf = PDF::loadView('employees.pdfprueba',
        $pdf = PDF::loadView('employees.cartapresentacion',
        array('title'=> $title,'date' => $date, 'employees' =>$employees));
        Mail::send('mails.adjunt',$mailData,function ($message) use($mailData,$pdf){

        $message->to($mailData['mail'])
                ->subject($mailData['title'])
                ->attachData($pdf->output(),"test.pdf");
        });

        dd('Email enviado');
    }


}
