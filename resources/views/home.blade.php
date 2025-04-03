<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Railway</title>
</head>
<body>
    <h1>APPLICAZIONI TRENI</h1>
    {{-- @dd($all_trains) --}}
    @foreach ($all_trains as $train)
    <div class="contenitore" style="border: 2px solid black">
        <h3>{{$train["train_code"]}}</h3>
        <h3>{{$train["departure_station"]}}</h3>
        <h3>{{$train["arrival_station"]}}</h3>
        <h3>{{$train["arrival_time"]}}</h3>
        <h3>{{$train["departure_time"]}}</h3>
        <h3>{{$train["total_carriages"]}}</h3>
        <h3>{{$train["on_time"]}}</h3>
        <h3>{{$train["deleted"]}}</h3>
    </div>
        
    @endforeach
</body>
</html>