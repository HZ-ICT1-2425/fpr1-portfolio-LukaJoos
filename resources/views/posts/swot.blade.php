<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blogposts.css') }}" rel="stylesheet">
    <title>post3</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>Personal SWOT</h1>
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
        <h3>My personal SWOT</h3>
        <div class="swot">
            <p class="strengths">
                Strengths:<br>
                Highly Motivated & Determined to do well.
            </p>
            <p class="weaknesses">
                Weaknesses:<br>
                Easily Distracted & when struggling hard quicker loss of motivation
            </p>
            <p class="opportunities">
                Opportunities:<br>
                To grow my knowledge and to develop myself even further both professionally and personally.
            </p>
            <p class="threats">
                Threats:<br>
                Underestimating the amount of schoolwork & time it will take to keep up.
            </p>
        </div>
    </article>
</main>

</body>

</html>
