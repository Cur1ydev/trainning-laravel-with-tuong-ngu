<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" style="border-collapse: collapse">

    <tr>
        <td>Tên sản phẩm</td>
        <td>Giá</td>
        <td>Kích cỡ</td>
        <td>Màu sắc</td>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            @foreach($product->attributes as $value)
                <td>{{$value->value}}</td>
            @endforeach

        </tr>
    @endforeach
</table>
</body>
</html>
