<!-- order.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Order</title>
</head>
<body>
    <h1>Order</h1>
    <form method="POST" action="{{ route('order') }}">
        @csrf
        <label for="product_id">Product ID:</label><br>
        <input type="number" id="product_id" name="product_id"><br>
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity"><br>
        <input type="submit" value="Add Order">
    </form>
</body>
</html>