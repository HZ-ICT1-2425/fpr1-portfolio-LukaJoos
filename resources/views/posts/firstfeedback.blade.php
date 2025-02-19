<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blogposts.css') }}" rel="stylesheet">
    <title>post1</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>Feedback</h1>
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
        <p>Having done the website preview, I have received quite a bit of feedback, both positive and constructive.
            Some of the positive feedback I received:
        <ul>
            <li>Nice code quality</li>
            <li>Clean dashboard</li>
            <li>Good CSS code</li>
            <li>Nice text blocks</li>
        </ul>
        <br>Here is also some of the constructive feedback I received:
        <ul>
            <li>More identity on every page</li>
            <li>One general CSS file</li>
            <li>Blog pages links</li>
            <li>Add a footer</li>
            <li>Add a progress bar in dashboard</li>
        </ul>
        and more...
    </article>
</main>

</body>

</html>
