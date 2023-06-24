<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Carta Presentacion</title>
 
</head>
<body>

    <div class="container">
        
           <h1 class="text-center">{{$title}}</h1>
        
            <p class="text-right"> {{$date}}</p>
            <p>
                @foreach ($employees as $employee)

                <p > !Bienvenido, {{$employee->FirstName}} {{$employee->LastName }} !</p>
                @endforeach
                
                Es para KingCats un placer darte la bienvenida como {{$employee->Title }} .
            </p>
            <br>
            <br>

            <p class="lh-sm">En KingCats sabemos que tienes mucho que aportar y que crecerás y te desarrollaras con nosotros,
            estamos seguros de que juntos lograremos nuestros objetivos profesionales. Estamos seguros de que juntos 
            lograremos nuestros objetivos profesionales y ofreceremos un servicio a nuestros clientes de calidad.</p>
   
        
    </div>
    
</body>
</html>