<!DOCTYPE html>
<html>
<head>
    <title>Buy cool new product</title>
</head>
<body>
<form action="/checkout" method="POST">
    @csrf
    <input type="hidden" name="name" value="cool new product">
    <button type="submit">Checkout</button>
</form>
</body>
</html>

