<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @for ($i = 0; $i <= $loop; $i++)
    @foreach ($data as $item)
    <p>{{ $item }}</p>
    @endforeach
    @endfor
</body>
</html>