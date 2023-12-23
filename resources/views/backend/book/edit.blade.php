<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('book.update',$book->bookId)}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <label for="">Name</label><br>
        <input type="text" name="name" id="" value="{{$book->name}}"><br>
        <label for="">Page Count</label><br>
        <input type="number" name="count" id="" value="{{$book->pageCount}}"><br>
        <label for="">Point</label><br>
        <input type="text" name="point" id="" value="{{$book->point}}"><br>
        <label for="">Author ID</label><br>
        <input type="text" name="author_id" id="" value="{{$book->authorId}}"><br>
        <label for="">Type ID</label><br>
        <input type="text" name="type_id" id="" value="{{$book->typeId}}"><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>