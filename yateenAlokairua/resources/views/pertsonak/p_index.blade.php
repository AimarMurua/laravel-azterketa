<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pertsonak</title>
</head>
<body>
    <h1>PERTSONAK</h1>
    <a href="/">back</a>
    <table border="1">
        <tr>
            <th>y_id</th>
            <th>y_izena</th>
        </tr>
        @foreach($pertsona as $pertsona)
        <tr>
            <td>{{ $pertsona->id }}</td>
            <td>{{ $pertsona->p_izena }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>