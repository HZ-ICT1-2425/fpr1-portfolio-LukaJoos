<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/main.css" rel="stylesheet">
    <link href="../css/dashboard.css" rel="stylesheet">
    <title>My dashboard</title>
</head>

<body>
<header>
    <div class="title">
        <img id="logo" src="../images/lukalogo.png">
        <h1>Dashboard</h1>
        <span id="logoright"></span>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a class="inuse" href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('faq') }}">FAQ</a></li>
            <li><a href="{{ route('blog') }}">Blog</a></li>
        </ul>
    </nav>
</header>


<main>
    <table>
        <thead>
        <tr>
            <th class="alternate">Quarter</th>
            <th>Course</th>
            <th class="alternate">ECs</th>
            <th>Exam</th>
            <th class="alternate">Grade</th>
        </tr>
        </thead>
        <tr>
            <td class="alternate" rowspan="4">1</td>
            <td>Programme and Career Orientation</td>
            <td class="alternate">2.5</td>
            <td>Presentation</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 1-->
            <td>Computer Science Basics</td>
            <td class="alternate">5</td>
            <td>Written Knowledge Test</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 1-->
            <td>Programming basics</td>
            <td class="alternate">5</td>
            <td>Case Study Exam</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 1-->
            <td>IT Personality Projectweek 1</td>
            <td class="alternate">1.25</td>
            <td>Portfolio</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <td class="alternate">1-4</td>
            <td>Personal Professional Development Exploration</td>
            <td class="alternate">12.5</td>
            <td>Criterium Focused Interview</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <td class="alternate" rowspan="2">2</td>
            <td rowspan="2">Object Oriented Programming</td>
            <td class="alternate" rowspan="2">10</td>
            <td>Group Presentation</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 2-->
            <!--Object Oriented Programming-->
            <!--10ECs-->
            <td>Written Knowledge Test</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <td class="alternate">2-3</td>
            <td>IT Personality 1</td>
            <td class="alternate">1.25</td>
            <td>Portfolio</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <td class="alternate" rowspan="5">3</td>
            <td rowspan="4">Framework Project 1</td>
            <td class="alternate" rowspan="4">10</td>
            <td>Database Exam</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <!--Framework Project 1-->
            <!--10 ECs-->
            <td>Case Study Exam</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <!--Framework Project 1-->
            <!--10 ECs-->
            <td>Group Presentation</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <!--Framework Project 1-->
            <!--10 ECs-->
            <td>Group Portfolio</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 3-->
            <td>IT Personality International Week</td>
            <td class="alternate">1.25</td>
            <td>Portfolio</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <td class="alternate" rowspan="2">3-4</td>
            <td>Business IT Consultancy Basics</td>
            <td class="alternate">2.5</td>
            <td>Video</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 3-4-->
            <td>IT personality 2</td>
            <td class="alternate">1.25</td>
            <td>Portfolio</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <td class="alternate" rowspan="3">4</td>
            <td rowspan="3">Framework Project 2</td>
            <td class="alternate" rowspan="3">10</td>
            <td>Final Group Delivery</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 4-->
            <!--Framwork Project 2-->
            <!--10 ECs-->
            <td>Individual Project Assessment</td>
            <td class="alternate">0</td>
        </tr>
        <tr>
            <!--Quarter 4-->
            <!--Framework Project 2-->
            <!--10 ECs-->
            <td>IT Development Portfolio</td>
            <td class="alternate">0</td>
        </tr>
        <tr class="table2">
            <th>1-4</th>
            <th>Current ECs</th>
            <th>0/60</th>
            <th>Average Grade</th>
            <th>0</th>
        </tr>
        <tr class="table2">
            <th></th>
            <th>NBSA Boundary</th>
            <th>45 ECs</th>
            <th></th>
            <th></th>
        </tr>

    </table>
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
