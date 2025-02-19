<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/blogposts.css') }}" rel="stylesheet">
    <title>post2</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>Study Choice</h1>
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
            The way I decided on this study is purely by seeing what HZ had to offer. I knew that I wanted to go to
            HZ but the biggest question was 'what studyfield do I see myself doing?'. This was a very tough question
            for myself to answer as I have previously done 2 MBO studies, both of which I didn't complete. Knowing
            my goal is to eventually move to New Zealand and seeing what HZ has to offer I decided to dig deeper
            into finding out what the study ICT had to offer, I did this by assessing the HZ page and also by asking
            a 4th year student. He kindly agreed to tell me some more about what the study entails to give me a
            better point of view of what to expect, this conversation made me sure I wanted to pursue a career
            within the ICT field.
        </p>
    </article>
</main>

</body>

</html>
