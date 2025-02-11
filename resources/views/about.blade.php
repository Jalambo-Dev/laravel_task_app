<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <h1>Hello, {{ $name }}</h1>
    <h1>You are in {{ $department }}</h1>
    <form action="about" method="post">
        @csrf
        <input type="text" name="name" placeholder="Enter your name">
        <select name="department" id="department">
            @foreach ($departments as $key => $department)
                <option value="{{ $key }}">{{ $department }}</option>
            @endforeach
        </select>
        <input type="submit" value="Send">
    </form>
</body>

</html>
