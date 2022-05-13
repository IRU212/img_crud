<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Book</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body>
        @include('layouts.header')
        <div class="book_img_all">
            @foreach ($items as $item)
                        @if ($item->image !== '')
                            <div class="book-size">
                                <div class="book_img">
                                    <a href="{{ route('book-edit',$item) }}"><img src="{{ \Storage::url($item->image) }}" alt="" ></a>
                                </div>
                            </div>
                        @else
                            <p>画像がありません</p>
                        @endif
            @endforeach
        </div>
        {{-- <h3>本一覧</h3>
        @foreach ($items as $item)
            <p>名前:{{ $item->name }}</p>
            <p>紹介:{{ $item->introduce }}</p>
            <p>値段:{{ $item->price }}円</p>
            <div>
                @if ($item->image !== '')
                    <img src="{{ \Storage::url($item->image) }}" alt="" width="25%">
                @else
                    <p>画像がありません</p>
                @endif
            </div>
            <a href="{{ route('book-edit',$item) }}">内容編集</a>
        @endforeach --}}
    </body>
</html>
