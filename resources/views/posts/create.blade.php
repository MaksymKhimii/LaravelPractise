<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Create Form</h1>
<form method="post" action="{{route('posts.store')}}">
    @csrf <!-- {{ csrf_field() }} -->
    <input type="text" name="title" placeholder="Enter title">
    <input type="submit" name="submit">
</form>
</body>
</html>
