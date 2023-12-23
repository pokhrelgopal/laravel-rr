<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


    <form action="{{route('borrow.store')}}" method="post" class="ml-5 space-y-4">
        @csrf
        <label for="studentId">Student ID:</label>
        <input class="border border-gray-300 px-2 py-1 rounded" type="text" id="studentId" name="studentId" required>
        <br>
        <label for="bookId">Book ID:</label>
        <input class="border border-gray-300 px-2 py-1 rounded" type="text" id="bookId" name="bookId" required>

        <br>

        <label for="takenDate">Taken Date:</label>
        <input class="border border-gray-300 px-2 py-1 rounded" type="date" id="takenDate" name="takenDate" required>

        <br>

        <label for="broughtDate">Brought Date:</label>
        <input class="border border-gray-300 px-2 py-1 rounded" type="date" id="broughtDate" name="broughtDate"
            required>

        <br>

        <button type="submit" class="px-4 py-2 rounded bg-blue-600 text-white">Submit</button>
    </form>

</body>

</html>