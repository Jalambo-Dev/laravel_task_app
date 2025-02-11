<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>

<body>
    <h1>Hello, {{ $name }}</h1>
    <form action="about" method="post">
        @csrf
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
</body>

</html>
