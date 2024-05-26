<!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
</head>
<body>
    <h1>Create User</h1>
    <form action="{{ route('store-user') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"><br><br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate"><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea><br><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>