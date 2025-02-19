<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
    <title>index</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>Luka's showcase website</h1>
        <span id="logoright"></span>
    </div>
    <nav class="navbar">
        <ul>
            <li><a class="inuse" href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>

<main>
    <img id="me" src="images/myself.jpg" alt="just me">
    <div class="p1">
        <!-- Paragraph 1, Why ICT? -->
        <h2>Why did I choose ICT?</h2>
        <p>
            In the past I have dropped out of MBO college twice... yes twice. This due to lack of motivation and no
            proper education.
            Wondering whether or not to go back to school, my brother told me about his experience at HZ.
            Even though he didn't study ICT he told me he had a great time at HZ and that they way of learning would
            be more or less the same.
            Hearing this I decided to scour the HZ website and see if there was something that I found interesting.
            This is when I found ICT, I did some research to what it entailed and had a conversation with a current
            student who was very positive.
            Even if I don't have any experience I really enjoy learning about creating this website and can say I am
            very proud of what I present here.
        </p>
    </div>

    <img id="bartender" src="../images/bartend.jpeg" alt="bartender">
    <div class="p2">
        <!-- Paragraph 2, Why do I think ICT Field suits me -->
        <h2>Why does the ICT field suit me?</h2>
        <p>From a young age I have been using computers, not necessarily for programming or anything ICT related but
            I did grow up with them.
            It's only recently when I met one of my best friends I started thinking about a career in the ICT field.
            He (my friend) is currently doing an apprenticeship and told me about the work he does and also showed
            me some of it.
            After seeing what he does and getting some short explanations I got very excited about this field of
            work.
            I decided I want to learn as much about it as I can hence why I think this is a great field of work for
            me.
        </p>
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
