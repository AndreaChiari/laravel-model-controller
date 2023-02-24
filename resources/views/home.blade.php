<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <div class="row">
            @foreach($movies as $movie)
            <div class="card col-6" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                <h4 class="card-text">{{$movie->title}}</h4>
                <h6>{{$movie->date}}</h6>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>
