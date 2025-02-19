<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blogposts.css') }}" rel="stylesheet">
    <title>post5</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>ICT Article</h1>
        <span id="logoright"></span>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>

<main>
    <article>
        <h3>1 in 4 ICT workers switched jobs or employers</h3>
        <p>In the past 12 months one in four employed ICT professionals switched jobs or changed employers.
            Where
            the mobility of ICT professionals has been stable in recent years, in the past year this has
            increased
            significantly whereas loyalty to their own manager/employer has decreased. Currently the number of
            ICT
            workers in the Netherlands is around 600.000 and is expected to grow to 900.000 by 2030. Even with
            this
            growth the demand for and scarcity of ICT workers remain high. This due to the increase in
            self-employed
            ICT professionals. <a class="link"
                                  href="https://headfirst.group/en/nieuws/1-op-de-4-icters-wisselde-in-2023-van-baan-of-werkgever/">source</a>
        </p>
    </article>
</main>

</body>

</html>
