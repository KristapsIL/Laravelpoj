<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    <h1>Add product</h1>
    <form method="POST" action="/create">
    @csrf
        <label>
            Product Name:
        <input name="name">
        </label>
        <label>
        Description:
        <textarea name="description"></textarea>
        </label>
        <label>
            Price
            <input name="price" type="number" step="0.01" max="9">
        </label>
        <label>
        image:
        <input name="image">
        </label>
        <button>ADD</button>
    </form>
</body>
</html>