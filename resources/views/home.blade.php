<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>
            {{ $title}}
        </h1>
        <div>
            <a href={{$url}}>Infos</a>
        </div>
    </header>


    <ul>
        <li>
            <h2>Lista del giorno :</h2>
        </li>
        @if ($goodDay)
            @foreach ($goodDayList as $goodElement)
            <li>
                {{$goodElement}}
            </li>
            @endforeach
        @else
            @foreach ($badDayList as $badElement)
                <li>
                    {{$badElement}}
                </li>
            @endforeach

        @endif
    </ul>
</body>
</html>
