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
    <header>
        <section id="head">
            <div class="logo">
                <img src="" alt="gameLife 로고">
            </div>

            <div class="menu-box">
                <div class="all-game-search">
                    <form action="/allSearch" method="GET">
                        <span>
                            <a href="/allSearch">
                                <i class="fas fa-search"></i>
                            </a>
                        </span>
                        <input type="text" name="allSearch" class="allSearch" placeholder="검색할 게임 제목을 입력해주세요.">
                    </form>
                </div>

                <ul class="main-menu">
                    <li class="main-many-menu">
                        <a href="#">모바일</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">안드로이드</a>
                            </li>
                            <li>
                                <a href="#">iOS</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">PC</a>
                    </li>
                    <li class="main-many-menu">
                        <a href="#">콘솔</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="#">플레이스테이션</a>
                            </li>
                            <li>
                                <a href="#">XBox</a>
                            </li>
                            <li>
                                <a href="#">닌텐도</a>
                            </li>
                            <li>
                                <a href="#">Wii</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">웹 게임</a>
                    </li>
                </ul>
            </div>

            <div class="login-info">
                @if(!isset($_SESSION['user']))
                <div class="login-box">
                    <a href="/login">로그인</a>
                </div class="login-box">
                @else
                <div class="user-info">
                    <!-- 프로필 사진은 지정 안할시 기본 사진으로 대처, 만약 지정할 경우 저장해야하므로 계정 db에 사진 경로를 하나 만들어 둔다. -->
                    <div class="img-profile" style="background-image:url(/images/video_lily.png);"></div>

                    <div class="nick-name">
                        <p>운영자</p>
                    </div>
                </div>

                <div class="user-edit">
                    <ul class="user-menu">
                        <li>
                            <a href="#">내 정보</a>
                        </li>
                        <li>
                            <a href="#">내 게시물</a>
                        </li>
                        <li>
                            <a href="#">추천</a>
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </section>
    </header>

    @yield('maincontent')
</body>

</html>