<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Controllers;
use App\Models\Product;
use App\Models\Employee;
use PDF;
class PDFController extends Controller
{
    //
    public function generatePDF(){
       $products=Product::where('ProductID',1)->first(); 


        $title = 'Alta de producto';
        $date = Date("Y/m/d");

       $pdf = PDF::loadView('products.altaproducto',array('title'=> $title,'date' => $date, 'product' =>$products));
       
       return $pdf->download('AltaProducto.pdf');
    }


    public function generatePresentacionPDF($id){

       // $employees=Empleado::where('EmployeeID',1)->first(); 
        $employees = Employee::select('EmployeeID', 'LastName', 'FirstName','Title' )
        ->where('EmployeeID', $id)
        ->get();
        
        $title = 'kingCats';
        $date = Date("Y/m/d");
 
        $pdf = PDF::loadView('employees.cartapresentacion',array('title'=> $title,'date' => $date, 'employees' =>$employees));
        return $pdf->download('Cartapresentación.pdf');
     }


}
