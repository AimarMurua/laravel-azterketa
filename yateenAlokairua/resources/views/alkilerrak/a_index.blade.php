<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a_index</title>
</head>
<body>
    <h1>ALKILERRAK</h1>
    <div>
        <a href="/">home</a>
    </div>
    <table border="1">
        <tr>
            <th>id</th>
            <th>p_izena</th>
            <th>y_izena</th>
            <th>x</th>
            <th>edit</th>
        </tr>
        @foreach ($alkilerra as $alkilerra)
            <tr>
                <td>{{ $alkilerra->id }}</td>
                <td>{{ $alkilerra->pertsona->p_izena }}</td>
                <td>{{ $alkilerra->yatea->y_izena }}</td>
                <td><a href="/a_delete/{{ $alkilerra->id }}" style="color:red;">x</a></td>
                <td><a href="/a_edit/{{ $alkilerra->id }}" style="color:orange;">edit</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>