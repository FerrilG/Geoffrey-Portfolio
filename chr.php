<?php

    $title= "C.H. Robinson";
    $currentPage = 'work';
    $subpage = 'chr';

    include "global/header.php";
?>

<div class="col full">


    <!-- Head -->
    <div class="row full crm" style="padding-top:5%;padding-bottom:2%">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col banner">
                    <div>
                        <img class="fit banner" src="images/chr/Project-Banner.png" alt="My Solution for C.H. Robinson">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row full title deepblu">
        <div class="center" style="overflow:hidden">
        <h1 id="title" style="white-space:nowrap; text-decoration:none">C.H. ROBINSON</h1>
        </div>
    </div>


    <!-- Skills -->
    <div class="row full crm">

    <div class="container-fluid" style="margin-bottom:8%;">
            <div class="row justify-content-center">
            <div class="col banner">
            <img class="fit" src="images/chr/process.png" alt="My Design Process for C.H. Robinson">
    </div>
            </div>

    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col center-text">
                <h4 class="list">Methods Used</h2>
                <ul class="method-list center">
                    <li>Affinity Diagramming</li>
                    <li>Contextual Inquiries</li>
                    <li>Rapid Prototyping</li>
                    <li>Sketch Sessions</li>
                    <li>User Surveys</li>
                </ul>
            </div>

            <div class="col center-text">
                <h4 class="list">Tools Used</h2>
                <ul class="method-list center">
                    <li>Axure</li>
                    <li>Illustrator</li>
                    <li>InDesign</li>
                    <li>Whiteboarding</li>
                    <li>Sketchpads</li>
                </ul>

            </div>
        </div>
    </div>
</div>






    <!-- Challenge -->
    <div class="row full pstlgry">

        <div class="col">
            <h2 class="center-text">Challenge</h2>
            <p>C.H. Robinson wanted an outside opinion to support an application redesign. The problem my team faced was:

            <p class="center-text" style="font-size:1.4rem">C.H. Robinson is using an internal application to track development time and help administration accurately plan and allocate resources for future projects. They want to improve accuracy and reduce administration tasks by increasing staff’s participation.</p>

            <p>While being constrained by a limited timeline, C.H. Robinson was available to support our ideas.</p>
        </div>
    </div>

<!-- Approach -->
    <div class="row full paste">
        <div class="col">
            <h2 class="center-text">Approach</h2>
<p>
                My team began by researching tools available on the market, understanding key features, and purpose of the tools. Following this, we went onsite and spoke with current users and administration to reveal pain-points.
                <br>
                <br>
                After synthesizing these findings and addressing how to incorporate them into an interactive prototype; we returned to C.H. Robinson to conduct usability tests. Our team repeated this process multiple times to refine our solution. 
                <br>
                <br>
                Taking the project further we would have addressed other areas that would include administration tools, visual design issues, and terminology.</p>
        </div>
    </div>

    <!-- Research -->
    <div class="row full crm">
        <div class="col">
            <h2 class="center-text">Research and Findings</h2>
            <p>After researching what features are available on the market, we proceeded with a contextual inquiry to identify current users, pain-points, and additional issues with this application. Taking the information, we then hosted a sketch session to allow users to be involved in the design process.</p>
            <div class="col">
                <div>
                    <img class="fit " src="images/chr/whiteboard.jpg" alt="Whiteboarding">
                    <p class="img-desc center-text">User Sketch Session</p>
                </div>
            </div>
            <p>We synthesized our data and identified multiple areas that could be improved upon. We found that users wanted features that would enable them to streamline their submission to minimize time spent allocating time.</p>
            <div class="col">
                <div>
                    <img class="fit " src="images/chr/affinity_diagram.jpg" alt="Affinity Diagram">
                    <p class="img-desc center-text">Affinity Diagram</p>
                </div>
            </div>
            <p>Users found it difficult to identify which areas to input time, automate their workflow, and visibly see preferred items. These issues caused users to be unhappy and their submissions inaccurate.
            <br>
            <br>
            We took this and created a tool that helps users identify and complete their submissions accurately and efficiently.</p>
        </div>
    </div>

    <div class="separator"></div>
    <!-- Solution -->
    <div class="row full crm">
        <div class="col center-text">
            <h2>Proposed Solution</h2>
            <br>
            <div class="col spacer" style="padding-bottom:10px">
                <div>
                    <img class="fit" src="images/chr/login.png" alt="Time Tracking Application - Login">
                    <p class="img-desc">Users will be able to get feedback when a false password is used.</p>
                </div>
            </div>
            <div class="col spacer">
                <div>
                    <img class="fit" src="images/chr/main.png" alt="Time Tracking Application - Main Page">
                    <p class="img-desc">This is the main screen for the time tracking application. Users will be able to identify and set "favorites" on the left to identify frequent projects.</p>
                </div>
            </div>
            <div class="col spacer">
                <div>
                    <img class="fit" src="images/chr/entry.png" alt="Time Tracking Application - Time Entry">
                    <p class="img-desc">Inputing numbers users will begin to see their total for the week as well as indicators for time above eight hours.</p>
                </div>
            </div>
            <div class="col spacer">
                <div>
                    <img class="fit" src="images/chr/presets.png" alt="Time Tracking Application - Presets">
                    <p class="img-desc">Users will be able to setup automated project population for repeatitive tasks. This will enable the user to improve workflow efficiency.</p>
                </div>
            </div>
        </div>
    </div>

<div class="deepblu" style="padding-top:10%"></div>






<?php
    include "global/footer.php";
?>