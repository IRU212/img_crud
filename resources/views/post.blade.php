<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>post</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        {{-- css --}}
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    </head>
    <body>
        @include('layouts.header')
        <div class="post">
            <form action="{{ asset('book/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{-- <div>名前:<input type="text" name="name"></div>
                <div>値段:<input type="text" name="price"></div>
                <div>紹介文:<input type="text" name="introduce"></div>
                <div>画像:<input type="file" name="image"></div>
                <input type="submit" value="投稿"> --}}
                <table>
                    <tr><th>名前</th><th><input type="text" name="name"></th></tr>
                    <tr><th>値段</th><th><input type="text" name="price"></th></tr>
                    <tr><th>紹介文</th><th><input type="text" name="introduce"></th></tr>
                    <tr><th>画像</th><th><label for="file">写真<input type="file" name="image" class="file" id="file"></label></th></tr>
                    <tr><th></th><th><input type="submit" value="投稿"></th></tr>
                </table>
            </form>
        </div>
    </body>
</html>
