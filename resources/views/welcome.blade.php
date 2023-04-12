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

    <main class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @forelse ($trains as $train)
                       <div class="div">
                        <h2>{{$train->Departure_station}}</h2>
                        <p>{{$train->Arrival_station}}</p>
                        <p>{{$train->Departure_time}}</p>
                        <p>{{$train->Arrival_time}}</p>
                        <p>{{$train->Train_code}}</p>
                        <p>{{$train->Number_of_carriages}}</p>
                        <p>{{$train->Intime}}</p>
                        <p>{{$train->Deleted}}</p>
                        <p>{{$train->date}}</p>
                       </div>
                        
                         
                   
                   @empty
                       
                   

                       
                   @endforelse

                </div>
            </div>

        </div>
    </main>

</body>

</html>