<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>編集</title>
</head>
<body>
    <h2>本データ編集</h2>
    <p>商品名:{{ $item->name }}</p>
    <p>紹介:{{ $item->introduce }}</p>
    <p>値段:{{ $item->price }}円</p>
    <h2>編集</h2>
    <form action="{{ route('book-update',$item) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div>名前:<input type="text" name="name"></div>
        <div>値段:<input type="text" name="price"></div>
        <div>紹介文:<input type="text" name="introduce"></div>
        <div>画像:<input type="file" name="image"></div>
        <input type="submit" value="投稿">
    </form>
    <a href="{{ route('book-home') }}">一覧に戻る</a>
</body>
</html>