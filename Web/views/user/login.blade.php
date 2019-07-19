<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gameLife! 로그인</title>
    <script src="/js/app.js"></script>
</head>
<body>
    <div class="login-box">
        <div class="login-img"></div>
        <div class="login-logo">

        </div>
        <form action="/login" method="post">
            <div class="login-input">
                <input type="text" name="id" class="id" id="id" autocomplete="off" placeholder="아이디를 입력해 주세요">
                <input type="password" name="pw" class="pw" id="pw" autocomplete="off" placeholder="비밀번호를 입력해 주세요">
            </div>
            <input type="submit" value="로그인" class="login">
        </form>
        <div class="login-signup">
            <a href="/signup"><span>회원 가입</span></a>
        </div>
    </div>
</body>
</html>