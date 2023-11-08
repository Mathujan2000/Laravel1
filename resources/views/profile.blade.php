<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
@if(isset($username))
    <h1>Welcome, {{ $username }}</h1>
    <p>Gebruikersnaam: {{ $username }}</p>
@else
    <p>Username is not set.</p>
@endif

</body>
</html>