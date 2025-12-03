<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
    <title>Document</title>
</head>
<body>
    <header>
        <div class="header__nav">
            <div class="header__nav-title">
               <a href="/">Todo</a>
            </div>
            <div class="header__nav-category">
                <a href="/">カテゴリー覧</a>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>