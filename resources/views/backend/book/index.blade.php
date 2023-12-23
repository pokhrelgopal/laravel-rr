<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="5">
        <tr>
            <th>Books</th>
            <th>Page Count</th>
            <th>Point</th>
            <th>Author ID</th>
            <th>Type ID</th>
            <th>Action</th>
        </tr>
        @foreach($books as $book)
        <tr>
            <td>{{$book->name}}</td>
            <td>{{$book->pagecount}}</td>
            <td>{{$book->point}}</td>
            <td>{{$book->authorId}}</td>
            <td>{{$book->typeId}}</td>
            <td>
                <a href="{{route('book.show',$book->bookId)}}">View Detail</a>
                <a href="{{route('book.edit',$book->bookId)}}">Update</a>
                <form action="{{route('book.destroy',$book->bookId)}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="submit" value="Delete">
                </form>

            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>