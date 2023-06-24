@if (count($employees) > 0 )
    
   <table id="employees" class="table table-striped"
    style="width:100%">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">LastName</th>
        <th scope="col">FirstName</th>
        <th scope="col">Title</th>
        <th scope="col">Acciones</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)

      <tr>
        <th scope="row">{{$employee->EmployeeID}}</th>
        <td>{{$employee->LastName}}</td>
        <td>{{$employee->FirstName}}</td>
        <td>{{$employee->Title}}</td>
        <td><button class= "btn btn-warning">
              <a href ="editEmployees/{{$employee->EmployeeID}}"> Actualizar </a></button>
            <button class= "btn btn-danger">
              <a href ="deleteEmployees/{{$employee->EmployeeID}}"> Eliminar </a></button>
            <button class= "btn btn-outline-success">
              <a href ="generate_presentacionPDF/{{$employee->EmployeeID}}"> Presentación PDF </a></button>
            <button class= "btn btn-outline-dark">
              <a href ="enviar_email/{{$employee->EmployeeID}}"> Email </a></button>
      </td>
      
      </tr>
      @endforeach
     
    </tbody>
  </table>
    
 

@else
    <h2>No se encontraron empleados.</h2>
@endif

<script>
$(document).ready(function () {
    $('#employees').DataTable();
});
</script>

