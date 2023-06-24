<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employee::all()->where('statusE','=',0);
         
        // return View::make('products.index');
  
  
     //   $empleados =  Empleado::select('ProductID', 'ProductName', 'Categories.CategoryName', 'UnitPrice', 'UnitsInStock' )
       //           ->join('Categories', 'Products.CategoryID', '=', 'Categories.CategoryID')
         //         ->get();
  
  
            return View::make('employees.index')->with('employees', $employees);
    }


    
    //
    public function edit($id)
    {
       $employees = Employee::select('EmployeeID', 'LastName', 'FirstName','Title' )
       ->where('EmployeeID', $id)
       ->get();

        return View('employees.edit',compact('employees'));

    }

    public function update(Request $request){
        
      $request->all();
      $id= $request->input('id');
      $lastName = $request->input('lastName');
      $firstName = $request->input('firstName');
      $title = $request->input('title');



   
      
      $update= Employee::where('EmployeeID',$id)
      ->update(['LastName' => $lastName,
      'FirstName' =>$firstName,
      'Title'=>$title,
      ]);

      return redirect('/listaEmployees');
  }

    public function deleteEmployee($id){

      $delete = Employee::where('EmployeeID',$id)->First();
     // $elimina = Product::where('ProductID',$id)->First();

      if($delete){

        $employeeDelete = Employee::where('EmployeeID',$id)
        ->update(['statusE'=>1]);


      }
      else{
        return "error";
        //Hard delete (no recomendado)
        $eliminacion = Employee::where('EmployeeID',$id)
        ->delete($id);
      }
      if($employeeDelete>=1) {
          return redirect('/listaEmployees');


      }


    }






}
