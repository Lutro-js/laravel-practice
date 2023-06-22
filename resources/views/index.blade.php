<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="uft-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title>Lunchmap</title>
    <style>body {padding: 10px;}</style>
</head>
<body>
    <h1>お店一覧</h1>

    @foreach ($shops as $shop)
        <p>
            {{$shop->category->name}},
            {{$shop->name}},
            {{$shop->address}}
        </p>
    @endforeach
</body>
</html>