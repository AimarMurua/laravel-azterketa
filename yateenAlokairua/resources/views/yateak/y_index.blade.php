<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yateak</title>
</head>
<body>
    <h1>YATEAK</h1>
    <a href="/">back</a>
    <table border="1">
        <tr>
            <th>y_id</th>
            <th>y_izena</th>
            <th>y_urtea</th>
            <th>y_bidaiari_kop</th>
            <th>X</th>
            <th>edit</th>
        </tr>
        @foreach($yatea as $yatea)
        <tr>
            <td>{{ $yatea->id }}</td>
            <td>{{ $yatea->y_izena }}</td>
            <td>{{ $yatea->y_urtea }}</td>
            <td>{{ $yatea->y_bidaiariak }}</td>
            <td><a href="" style="color:red;">X</a></td>
            <td><a href="/y_edit/{{ $yatea->id }}" style="color:orange;">edit</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>