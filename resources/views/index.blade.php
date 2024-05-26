<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <ul>
        @foreach($products as $product)
            <li>
                {{ $product->name }} ({{ $product->status }})
                <a href="{{ route('product', $product->id) }}">View</a>
            </li>
        @endforeach
    </ul>
    <a href="{{ route('create-product') }}">Create Product</a>
</body>
</html>