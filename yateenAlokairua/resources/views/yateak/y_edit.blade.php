<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>y_edit</title>
</head>
<body>
    <h1>yatea editatu</h1>
    <a href="/yateak">back</a>
    <form action="/y_update/{{ $yatea->id }}" method="POST">
        @csrf
        <label for="y_izena">izena: </label>
        <input type="text" name="y_izena" id="y_izena" value="{{ $yatea->y_izena }}">
        <br>
        <label for="y_urtea">urtea: </label>
        <input type="date" name="y_urtea" id="y_urtea" value="{{ $yatea->y_urtea }}">
        <br>
        <label for="">bidaiariak: </label>
        <input type="text" name="y_bidaiariak" id="y_bidaiariak" value="{{ $yatea->y_bidaiariak}}"><br>
        <input type="submit" value="edit">
    </form>
</body>
</html>
