<!DOCTYPE html>
<html>
<head>
    <title>Edit User {{ $user->name }}</title>
</head>
<body>
    <h1>Edit User {{ $user->name }}</h1>
    <form action="{{ route('update-user', $user->id) }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $user->name }}"><br><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $user->email }}"><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        <label for="gender">Gender:</label>
        <select id="gender" name="gender">
            <option value="male" @if($user->gender == 'male') selected @endif>Male</option>
            <option value="female" @if($user->gender == 'female') selected @endif>Female</option>
        </select><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{ $user->age }}"><br><br>
        <label for="birthdate">Birthdate:</label>
        <input type="date" id="birthdate" name="birthdate" value="{{ $user->birthdate }}"><br><br>
        <label for="address">Address:</label>
        <textarea id="address" name="address" value="{{ $user->address }}"></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>