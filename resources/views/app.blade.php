<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h1>الإختبار النصفي</h1>
        <nav>
            <ul>
                <li><a href="/">الصفحة الرئيسية</a></li>
            </ul>
        </nav>
    </header>
    <div class="body">
        @yield('content')
    </div>
</body>
</html>