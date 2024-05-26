<!-- invoice.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
</head>
<body>
    <h1>Invoice</h1>
    <form method="POST" action="{{ route('invoice') }}">
        @csrf
        <label for="order_id">Order ID:</label><br>
        <input type="number" id="order_id" name="order_id"><br>
        <label for="total">Total:</label><br>
        <input type="number" id="total" name="total"><br>
        <input type="submit" value="Generate Invoice">
    </form>
</body>
</html>