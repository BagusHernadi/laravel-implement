<!-- profile.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <form method="POST" action="{{ route('profile') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <label for="password_confirmation">Password Confirmation:</label><br>
        <input type="password" id="password_confirmation" name="password_confirmation"><br>
        <input type="submit" value="Update">