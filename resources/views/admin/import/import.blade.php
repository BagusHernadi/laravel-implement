<!-- import.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Import</title>
</head>
<body>
    <h1>Import</h1>
    <form method="POST" action="{{ route('import') }}">
        @csrf
        <label for="file">File:</label><br>
        <input type="file" id="file" name="file"><br>
        <input type="submit" value="Import">
    </form>
</body>
</html>