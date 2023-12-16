<!-- resources/views/session.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Item</title>
</head>
<body>
    <h1>Session Item</h1>
    <p>{{ $item['name'] }}</p>
    <p>{{ $item['price'] }}</p>
    <p>{{ $item['country'] }}</p>
</body>
</html>
