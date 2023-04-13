<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="vh-100 d-flex justify-content-center align-items-center row ">
        @foreach ($trains as $train)
        <div class="card p-4 m-5 " style="width: 18rem;">
              <h5 class="card-title">{{$train->firm}}</h5>
              <p class="card-text">Partenza: {{$train->start_station}} {{$train->time_start}}</p>
              <p class="card-text">Arrivo: {{$train->end_station}} {{$train->time_end}}</p>
              <a href="#" class="btn btn-primary">
                @if ($train->deletion == 1)
                    in tansito
                @else
                    cancellato
                @endif
              </a>
            </div>
          </div>
        @endforeach
    </main>

</body>

</html>
