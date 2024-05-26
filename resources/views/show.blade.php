<!DOCTYPE html>
<html>
<head>
    <title>Product {{ $product->name }}</title>
</head>
<body>
    <h1>Product {{ $product->name }}</h1>
    <p>Price: {{ $product->price }}</p>
    <p>Weight: {{ $product->weight }}</p>
    <p>Status: {{ $product->status }}</p>
    <a href="{{ route('edit-product', $product->id) }}">Edit</a>
    <a href="{{ route('destroy-product', $product->id) }}">Delete</a>
</body>
</html>