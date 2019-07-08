<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="/js/app.js"></script>
    @yield('scriptsection')
    <title>gameLife!</title>
</head>
<body>
    <div id="wrapper">
        <header>
            <div class="logo">
                <img src="" alt="gameLife 로고">
            </div>

            <div class="menu-box">
                <ul class="mainMenu">
                    <li>모바일</li>
                    <li>PC</li>
                    <li>
                        <p>콘솔</p>
                        <ul>
                            <li>플레이스테이션</li>
                            <li>XBox</li>
                            <li>닌텐도</li>
                            <li>Wii</li>
                        </ul>
                    </li>
                    <li>웹 게임</li>
                </ul>
            </div>

            <div class="login-info">
            @if(!isset($_SESSION['user']))
                <button>로그인</button>
            @else
                <p>이름이다!</p>
            @endif
            </div>
        </header>

        @yield('maincontent')
    </div>
</body>
</html>