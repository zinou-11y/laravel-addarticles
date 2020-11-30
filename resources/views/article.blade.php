<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>welcom to articles page</h1>
<h4>add new article</h4>
   <form action="/article" method="POST">
    @csrf
       <input type="text" name="title" placeholder="title"><br><br>
       <input type="text" name="category" placeholder="category"><br><br>
       <textarea name="body "></textarea><br><br>
       <input type="submit" value="ajouter"><br><br>

   </form>

<h4>all articles </h4>
 @foreach ($Articles  as $Article)
     <a href=" /article"/{{ $Artiles->slug }}> {{ $Article->title }}</a><br>
 @endforeach


</body>
</html>
