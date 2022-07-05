<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/reset.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <title>試行用view</title>
</head>
<body>
    <h1>Practice</h1>
        @forelse ($posts as $index => $value)
            <li>
                <a href="/posts/{{ $index }}">
                    {{ $value }}</li>
                </a>
        @empty
            <li>配列が空</li>
        @endforelse

</body>
</html>
