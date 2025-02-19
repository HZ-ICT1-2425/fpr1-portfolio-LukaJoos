<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/faq.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="{{ asset('/images/lukalogo.png') }}" alt="luka logo">
        <h1>FAQ</h1>
        <span id="logoright"></span>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a class="inuse" href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>

<main>
    <section class="faq">
        <div>
            <h3>How can you print a document from your laptop at HZ?</h3>
            <ol>
                <li>Select the following printer:<b>HZ Printer</b></li>
                <li>When the printer job is given, log in using your HZ username &amp; password</li>
                <li>Choose the print release option, you will see which print jobs are ready</li>
                <li>If there is sufficient balance in your print account, the print jobs will be printed</li>
            </ol>
        </div>

        <div>
            <h3>How can you scan a document and send it to your laptop at HZ?</h3>
            <ol>
                <li>Log on to the printer using your HZ card or HZ username &amp; password</li>
                <li>Choose the <b>Scan</b> option in the menu</li>
                <li>Place the original document on the feeder or glas palte</li>
                <li>Press start</li>
            </ol>
        </div>

        <div>
            <h3>How can I buy something on the HZ web shop?</h3>
            <ol>
                <li>go to the HZ <a
                        href="https://webshop.hz.nl/webshopapp/defaulten.aspx?menu=082076044027019251066025111065201099237062130097"
                        target="_blank">web shop</a></li>
                <li>Put the desired item in the cart</li>
                <li>Go to the checkout and pay for the item</li>
            </ol>
        </div>

        <div>
            <h3>How can you book a project space?</h3>
            <ol>
                <li>Go to the <a
                        href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=f56d5230-ffe5-4ab7-ad47-ec9374b5ec34"
                        target="_blank">reservation website</a> </li>
                <li>For further help you can use <a
                        href="https://hzuniversity.topdesk.net/tas/public/ssp/content/detail/knowledgeitem?origin=sspTile&unid=222efc2f5baa4a5ba75647c7bec4482a&from=a59949b7-517c-4418-9ebc-c928dc9781a8"
                        target="_blank">this link</a> </li>
            </ol>
        </div>

        <div>
            <h3>What are the instructions if you want to park your car at the HZ parking lot?</h3>
            <ol>
                <li>For the parking instructions please visit <a
                        href="https://hz.nl/locaties/middelburg?_gl=1*1rocxmb*_up*MQ..&gclid=Cj0KCQjwiuC2BhDSARIsALOVfBJmbYF6b3Y9Dd09N-1Gu33tbou1hi4Y4tp0hfqUChKxU0yCIgnTF5MaApGLEALw_wcB#Parkeren&routebeschrijving"
                        target="_blank">this link</a> </li>
            </ol>
        </div>
    </section>
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
