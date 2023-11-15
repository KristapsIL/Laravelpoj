<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Add product</title>
  <link rel="stylesheet" href="/style.css">
</head>
<body>
  @if($errors->any())
  <ul class="error-list">
    @foreach($errors->all() as $err)
      <li>{{$err}}</li>
      @endforeach
  </ul>
  @endif
  <h1>Please add product</h1>
  <form method="POST" action="/products">
    @csrf
    <label>
      Product name:
      <input name="name"/>
    </label>
    <label>
      Description:
      <textarea name="description"></textarea>
    </label>
    <label>
      Price:
      <input type="number" step="0.01" max="9" name="price"/>
    </label>
    <label>
      Image:
      <input name="image" />
    </label>
    <button>Add</button>
  </form>
</body>
</html>