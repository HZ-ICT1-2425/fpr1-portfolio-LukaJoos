<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blogposts.css') }}" rel="stylesheet">
    <title>post4</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>Programming Experience</h1>
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
        <p>
            In short... I have absolutely <b>no</b> prior programming experience.<br>
            The only experience I have built up so far is from making this website + following the PBA/CSB Lectures.
        </p>
    </article>
</main>

</body>

</html>
