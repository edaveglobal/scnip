<!DOCTYPE html>
<html>
<head>
    <title>Catalog</title>
</head>
<body>
    <h1>Products Sorted by Price:</h1>
    <ul>
        @foreach ($productsSortedByPrice as $product)
            <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>

    <h1>Products Sorted by Sales per View:</h1>
    <ul>
        @foreach ($productsSortedBySalesPerView as $product)
            <li>{{ $product['name'] }} - ${{ $product['price'] }}</li>
        @endforeach
    </ul>
</body>
</html>
