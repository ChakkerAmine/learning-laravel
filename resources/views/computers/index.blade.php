<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Computers</title>
</head>
<body>
    <h1>Computers</h1> 
    <hr>
 
    <div class="data">
        @if (count($computers) > 0)
            <ul>
                @foreach ($computers as $computer)
                    <li>{{ $computer['name'] }} is from <strong>{{$computer['origin']}}</strong></li>
                    <hr>
                @endforeach
            </ul>
        @else 
            <p>there is no Computer to display</p>
        @endif
       
    </div>

</body>
</html>