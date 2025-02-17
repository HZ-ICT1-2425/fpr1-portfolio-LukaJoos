<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet">
    <title>profile</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="../images/lukalogo.png">
        <h1>Profile</h1>
        <span id="logoright"></span>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a class="inuse" href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>

<main>
    <article>
        <ol class="characteristiscs">Characteristics about me
            <li>Caring</li>
            <li>Friendly</li>
            <li>Ambitious</li>
            <li>Reflective</li>
        </ol>
        <ul class="sociallinks">Links
            <li><a href="https://github.com/LukaJoos" target="_blank">My github</a></li>
            <li><a href="https://open.spotify.com/user/lukajoos" target="_blank">My spotify</a></li>
            <li><a href="https://www.linkedin.com/in/luka-joos-8530b0217/" target="_blank">My Linked-in</a> </li>
            <li><a href="https://steamcommunity.com/id/lukejox/" target="_blank">My Steam-account</a></li>
        </ul>
        <p class="personal">
            Heyo! I'm luka, a first year ICT student at HZ University of Applied Sciences. Some information about
            myself:
            I live in Middelburg, Zeeland. And am currently 22 years of age.<br>
            In my free time I enjoy gaming, primarily sim racing (think of games such as the Formula 1 series and
            iRacing).
            Besides racing game I also enjoy valorant and some indie games.<br>
            Next to gaming I also really like to travel and explore new places, both in and outside of europe.
        </p>
        <div class="container">
            <!-- Div contains paragraphs + ul -->
            <p class="travel">
                So coming back to me liking to travel, in these past couple of years I have visited quite a couple
                of nice
                spots, these being:
            </p>
            <ul class="travel">
                <li>Finland</li>
                <li>New York City</li>
                <li>Seattle</li>
                <li>Thailand</li>
                <li>New Zealand</li>
                <li>And more..</li>
            </ul>
            <p class="travel">
                Most of my trips were between 1 and 2 weeks long. However Seattle-Thailand was a 3 Month solo trip,
                this
                trip
                was mostly to "reset" myself as that past year was a bit of a mess. During this trip I got to stay
                with
                family
                who I
                didn't know before this trip, they were very hospitable and gave me many recommendations to do.
                After
                staying
                with them for 2 months I continued my travels to Thailand where I did a 4-week long International
                Bartending
                Course, this was an amazing experience where I learned a lot, not just in bartending but also
                personal
                development.
            </p>
        </div>
        <div class="photos">
            <img class="picsprofile" src="{{ asset('/images/nzneedle.jpg') }}" alt="nzneedle">
            <img class="picsprofile" src="{{ asset('/images/thailand.jpg') }}" alt="thailand">
            <img class="picsprofile" src="{{ asset('/images/snoqualmie.jpg') }}" alt="usa">
        </div>
    </article>
    <div class="spotify">
        <!-- Spotify links, copied from the spotify website -->
        <h2>Some of my favorite songs</h2>
        <iframe class="song" style="border-radius:12px"
                src="https://open.spotify.com/embed/track/6oofvZ4K8vBHnCT1oKERcd?utm_source=generator" width="30%"
                height="152" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        <iframe class="song" style="border-radius:12px"
                src="https://open.spotify.com/embed/track/4ewazQLXFTDC8XvCbhvtXs?utm_source=generator" width="30%"
                height="152" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
        <iframe class="song" style="border-radius:12px"
                src="https://open.spotify.com/embed/track/6Q1m1GyNxyOwZ2ud3p7XoS?utm_source=generator" width="30%"
                height="152" frameBorder="0" allowfullscreen=""
                allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                loading="lazy"></iframe>
    </div>
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
