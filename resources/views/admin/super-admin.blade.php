<!-- super-admin.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Super Admin</title>
</head>
<body>
    <h1>Super Admin</h1>
    <form method="POST" action="{{ route('super-admin') }}">
        @csrf
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>