<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('book.store')}}" method="post">

        @csrf
        <label for="">Name</label><br>
        <input type="text" name="name" id="">@error('name')
        {{$message}}
        @enderror<br>

        <label for="">Page Count</label><br>
        <input type="text" name="count" id="">
        @error('count')
        {{$message}}
        @enderror<br>
        <label for="">Point</label><br>
        <input type="text" name="point" id=""><br>
        <label for="">Author ID</label><br>
        <input type="text" name="author_id" id=""><br>
        <label for="">Type ID</label><br>
        <input type="text" name="type_id" id=""><br><br>
        <button type="submit">Submit</button>
    </form>
</body>

</html>