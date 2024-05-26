<!-- product.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Product</title>
</head>
<body>
    <h1>Product</h1>
    <form method="POST" action="{{ route('product') }}">
        @csrf
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>