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
<h1>Edit Post</h1>
<form method="post" action="{{route('posts.update', $post->id)}}">
    @csrf <!-- {{ csrf_field() }} -->
    @method('PUT')
    <input type="text" name="title" placeholder="Enter title" value="{{$post->title}}">
    <input type="submit" name="Update">
</form>

<form method="post" action="{{route('posts.destroy', $post->id)}}">
    @csrf <!-- {{ csrf_field() }} -->
    @method('DELETE')
    <input type="submit" name="Удалить" value="Delete">
</form>
</body>
</html>
