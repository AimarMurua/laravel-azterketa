<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a_edit</title>
</head>
<body>
    <h1>Alkilerra editatu</h1>
    <a href="/alkilerrak">back</a>
    <form action="/a_update/{{ $alkilerra->id }}" method="POST">
        <!-- Hauek select option batekin egin beharko ziren, sortutako yateak eta pertsonak aukeratu ahal izateko baina ez dut denborarik izan -->
        @csrf
        <label for="p_izena">p_izena:</label>
        <input type="text" name="p_izena" id="p_izena" value="{{ $alkilerra->p_izena}}">
        <br>
        <label for="y_izena">y_izena:</label>
        <input type="text" name="abizena" id="abizena" value="{{ $alkilerra->y_izena }}">
        <br>
        <input type="submit" value="edit">
    </form>
</body>
</html>
