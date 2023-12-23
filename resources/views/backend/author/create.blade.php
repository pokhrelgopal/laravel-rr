<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>

<body>

    <h2>Enter Your Name and Surname</h2>

    <form action="{{route('author.store')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <br>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required>

        <br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>