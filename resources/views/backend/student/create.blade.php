<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="container">

    <h2 class="mx-16 text-3xl font-bold mb-10">Student Information Form</h2>

    <form action="{{route('student.store')}}" method="post" class="mx-16 space-y-3 w-80">
        @csrf
        <div class="flex flex-col">
            <label for="name">Name:</label>
            <input class="border rounded border-gray-300 px-2 py-1" type="text" id="name" name="name" required>
        </div>

        <div class="flex flex-col">
            <label for="surname">Surname:</label>
            <input class="border rounded border-gray-300 px-2 py-1" type="text" id="surname" name="surname" required>
        </div>
        <div class="flex flex-col"> <label for="birthdate">Birthdate:</label>
            <input class="border rounded border-gray-300 px-2 py-1" type="date" id="birthdate" name="birthdate"
                required>
        </div>
        <div class="flex flex-col"><label for="gender">Gender:</label>
            <select class="border rounded border-gray-300 px-2 py-1" id="gender" name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="flex flex-col">
            <label for="class">Class:</label>
            <input class="border rounded border-gray-300 px-2 py-1" type="text" id="class" name="class" required>
        </div>
        <div class="flex flex-col">
            <label for="point">Point:</label>
            <input class="border rounded border-gray-300 px-2 py-1" type="number" id="point" name="point" required>
        </div>
        <input class="bg-indigo-700  rounded text-white px-4 py-2" type="submit" value="Submit">
    </form>

</body>

</html>