<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/blog.css" rel="stylesheet">
    <title>blog</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>Blog posts</h1>
        <span id="logoright"></span>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a class="inuse" href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>

<main>
    <article class="posts">
        <div class="post1">
            <p class="date"><i>03/10/2024</i></p>
            <h3>First Feedback</h3>
            <p>My received feedback so far... <a class="link" href="{{ route('posts.show', 'firstfeedback') }}">Read more</a></p>
        </div>
        <div class="post2">
            <p class="date"><i>11/09/2024</i></p>
            <h3>Study Choice</h3>
            <p>The way I decided on this study is purely by seeing what HZ had to offer...
                <a class="link" href="{{ route('posts.show', 'studychoice') }}">Read more</a>
            </p>
        </div>
        <div class="post3">
            <p class="date"><i>11/09/2024</i></p>
            <h3>Personal SWOT</h3>
            <p>Get to know me personal SWOT... <a class="link" href="{{ route('posts.show', 'swot') }}">Read more</a>
            </p>
        </div>
        <div class="post4">
            <p class="date"><i>11/09/2024</i></p>
            <h3>Programming Experience</h3>
            <p>Get to know my previous programming experience... <a class="link" href="{{ route('posts.show', 'experience') }}">Read
                    more</a></p>
        </div>
        <div class="post5">
            <p class="date"><i>11/09/2024</i></p>
            <h3>Article</h3>
            <p>In the past 12 months one in four employed ICT professionals switched jobs or changed employers...
                <a class="link" href="{{ route('posts.show', 'ictarticle') }}">Read more</a> </p>
        </div>
    </article>
</main>

<footer>
    <aside>
        <div class="links">
            <ul>Links
                <li><a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/CER-HZ-Bachelor-full-time-2023-2024-DEF-version-20240412.pdf"
                       target="_blank">Course and Examination Regulations</a></li>
                <li><a href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf"
                       target="_blank">Implementation Regulations</a></li>
                <li><a href="https://glaze-donut-5a5.notion.site/PCO1en-Your-Showcase-Website-7bc8c340f66047d0b49b83e8dc44ba23"
                       target="_blank">Notion Enviroment</a></li>
                <li><a href="https://hz.osiris-student.nl/voortgang" target="_blank">Study Progress</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT" target="_blank">HZ GitHub Enviroment</a></li>
            </ul>
        </div>
    </aside>
</footer>

</body>

</html>
