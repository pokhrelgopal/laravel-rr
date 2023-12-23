<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>

<body>

    <h2>Enter Type</h2>

    <form action="{{route('type.store')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="type_name" required>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>