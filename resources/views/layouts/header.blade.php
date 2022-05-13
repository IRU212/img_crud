<header>
    <nav>
        <ul>
            <li><a href="{{ asset('/') }}">ホーム</a></li>
            <li><a href="{{ asset('/book') }}">一覧</a></li>
            <li><a href="{{ asset('/post') }}">出品</a></li>
            <li>@include('user_login')</li>
        </ul>
    </nav>
</header>