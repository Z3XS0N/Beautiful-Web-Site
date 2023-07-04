<html lang="az">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{asset("css/main.css")}}">
    {{--<link rel="stylesheet" href="@yield("css")">--}}
</head>
<body>
<div class="navbar">
    <a href="/">Anasayfa</a>
    <a href="/about">Hakkımızda</a>
    <a href="/workplace">İş Alanı</a>
    <a href="/profile">Profile</a>
    <a href="/login">Giriş Yap</a>
</div>
@yield("context")
</body>
</html>
