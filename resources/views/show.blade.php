<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{ $article->title }}</h1>
    <small>publiee le :{{ $article->created_at}}</small>
    <p>{{ $article->body }}</p>
</body>
</html>
