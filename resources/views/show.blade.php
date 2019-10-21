<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car</title>
</head>
<body>

    <table style="border: 1px solid silver">
        <tr>
            <th>Car title</th>
            <th>Car producer</th>
            <th>Number of doors</th>
        </tr>
        <tr>
            <td>{{$car->title}}</td>
            <td>{{$car->producer}}</td>
            <td>{{$car->number_of_doors}}</td>
        </tr>    

</body>
</html>