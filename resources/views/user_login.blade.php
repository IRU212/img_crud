<div class="">
    @if (Route::has('login'))
        <div>
            @auth
                <a href="{{ url('/dashboard') }}">{{ Auth::user()->name }}</a>
            @else
                <a href="{{ route('login') }}">ログイン</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">新規登録</a>
                @endif
            @endauth
        </div>
    @endif
</div>