<!-- export.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Export</title>
</head>
<body>
    <h1>Export</h1>
    <form method="POST" action="{{ route('export') }}">
        @csrf
        <label for="file">File:</label><br>
        <input type="file" id="file" name="file"><br>
        <input type="submit" value="Export">
    </form>
</body>
</html>