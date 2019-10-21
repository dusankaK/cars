<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>
<body>

    <ul>
        @foreach($cars as $car)
            <li class="list">
                <a href="/cars/{{$car->id}}">{{ $car->producer }}</a> 
                <small>{{ $car->title }} - {{ $car->number_of_doors}} doors</small>
            </li>
        @endforeach
    </ul>

</body>
</html>