<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>
    <main>
    @foreach($products as $product)
        <article>
            <h2>{{$product->name}}</h2>
            <img src= {{$product->imageURL}} alt={{$product->name}} width="200px"/>
            <p>{{$product->description}}</p>
            <P>1.49 EUR</P>
        </article>
        @endforeach
    </main>
</body>
</html>