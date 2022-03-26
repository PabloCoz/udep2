<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link rel="stylesheet" href="{{ public_path('css/app.css') }}">
</head>

<body>

    <div class="flex text-center text-2xl">
        <h1 class="font-bold">Examen</h1>
        <h1 class="font-bold">{{ $exam->name }}</h1>
    </div>

    <div class="my-6">
        <h1 class="text-lg text-justify">
            {{$exam->description}}
        </h1>
    </div>

    <div class="mt-10">
        @foreach ($exam->questions as $question)
            <li>
                {{$question->name}}
                <div class="space-x-5">
                @foreach ($question->options as $option)
                
                    <label for="">{{$option->name}}</label>
                    <input type="checkbox" name="" id="">
                
                    
                @endforeach</div>
            </li>
        @endforeach
    </div>

</body>

</html>
