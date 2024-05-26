<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>
    <h1>Create Product</h1>
    <form action="{{ route('store-product') }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price"><br><br>
        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight"><br><br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="new">New</option>
            <option value="old">Old</option>
        </select><br><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>