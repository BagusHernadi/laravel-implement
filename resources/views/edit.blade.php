<!DOCTYPE html>
<html>
<head>
    <title>Edit Product {{ $product->name }}</title>
</head>
<body>
    <h1>Edit Product {{ $product->name }}</h1>
    <form action="{{ route('update-product', $product->id) }}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ $product->name }}"><br><br>
        <label for="description">Description:</label>
        <textarea id="description" name="description">{{ $product->description }}</textarea><br><br>
        <label for="price">Price:</label>
        <input type="number" id="price" name="price" value="{{ $product->price }}"><br><br>
        <label for="weight">Weight:</label>
        <input type="number" id="weight" name="weight" value="{{ $product->weight }}"><br><br>
        <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="new" @if($product->status == 'new') selected @endif>New</option>
            <option value="old" @if($product->status == 'old') selected @endif>Old</option>
        </select><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>