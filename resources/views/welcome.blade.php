<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel State Management</title>
</head>
<body>
    <h1>Laravel State Management</h1>
    
    <h2>Sessions:</h2>
    <p><a href="/set-session">Set Session</a></p>
    <p><a href="/get-session">Get Session</a></p>
    
    <h2>Caching:</h2>
    <p><a href="/set-cache">Set Cache</a></p>
    <p><a href="/get-cache">Get Cache</a></p>
    <h2>Clear Session:</h2>
<form action="/clear-session" method="post">
    @csrf
    <label for="key">Session Key:</label>
    <input type="text" name="key" id="key" required>
    <button type="submit">Clear Session</button>
</form>
</html>
