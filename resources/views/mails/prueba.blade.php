<?php 
use App\Http\Controllers\PruebaMailController;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

 

    <h1>{{$maildata['title']}}</h1>
    
    Estimado <h2>{{$maildata['user']}}</h2>;

    <p>{{$maildata['body']}}</p>


</body>
</html>