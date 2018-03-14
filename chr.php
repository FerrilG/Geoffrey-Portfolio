<?php

    $title= "C.H. Robinson";
    $currentPage = 'work';
    $subpage = 'chr';

    include "global/header.php";
?>

<div class="col full">


    <!-- Head --> 
    <div class="row full crm" style="padding-top:5%;padding-bottom:2%">
        <div class="container-fluid center-text">
            <img class="fit banner" src="images/chr/Project-Banner.png" alt="My Solution for C.H. Robinson">
        </div>
    </div>

    <div class="row full title deepblu" style="border-bottom: 2px solid;">
        <div class="center" style="overflow:hidden">
            <h1 id="title" style="text-decoration:none">C.H. ROBINSON</h1>
        </div>
    </div>




    <!-- Tools -->
    <div class="crm" id="tools">
        <div class="row" style="padding-bottom:5%;padding-top:5%;">
            <div class="col center-text" style="border-right: 1px solid;">
                <h4 class="list">Methods</h2>
                <ul class="method-list center">
                    <li>Affinity Diagramming</li>
                    <li>Contextual Inquiries</li>
                    <li>Rapid Prototyping</li>
                    <li>Sketch Sessions</li>
                    <li>User Surveys</li>
                </ul>
            </div>

            <div class="col center-text" style="border-left: 1px solid;">
                <h4 class="list">Tools</h2>
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




    <!-- Challenge -->
    <a class="row full pstlgry collapsed" data-toggle="collapse" aria-expanded="false" style="border-bottom: 2px solid;padding-bottom: 2%;padding-top: 2%;text-decoration:none" href="#challenge">
        <div class="center" style="display: inline-flex;">
            <i class="material-icons cont-arrow exp">expand_more</i>
            <i class="material-icons cont-arrow min">expand_less</i>    
            <h2>Challenge</h2>
        </div>
    </a>

    <div class="crm collapse" id="challenge">
        <div class="content">
            <p>C.H. Robinson wanted an outside opinion to support an application redesign. The problem my team faced was:</p>
            <p class="center-text">C.H. Robinson is using an internal application to track development time and help administration accurately plan and allocate resources for future projects. They want to improve accuracy and reduce administration tasks by increasing staff’s participation.</p>
            <p>While being constrained by a limited timeline, C.H. Robinson was available to support our ideas.</p>                  
        </div>
    </div>

    


    <!-- Approach -->
    <a class="row full pstlgry collapsed" data-toggle="collapse" aria-expanded="false" style="border-bottom: 2px solid;padding-bottom: 2%;padding-top: 2%;text-decoration:none" href="#approach">
        <div class="center" style="display: inline-flex;">
            <i class="material-icons cont-arrow exp">expand_more</i>
            <i class="material-icons cont-arrow min">expand_less</i>    
            <h2>Approach</h2>
        </div>
    </a>

    <div class="crm collapse" id="approach">
        <div class="content">
            <p>My team began by researching tools available on the market, understanding key features, and purpose of the tools. Following this, we went onsite and spoke with current users and administration to reveal pain-points.</p>
            <p>After synthesizing these findings and addressing how to incorporate them into an interactive prototype; we returned to C.H. Robinson to conduct usability tests. Our team repeated this process multiple times to refine our solution.</p>
            <p>Taking the project further we would have addressed other areas that would include administration tools, visual design issues, and terminology.</p>
            <div class="container-fluid" style="margin-top:5%;padding-bottom:1.5em;">
                <div class="row justify-content-center">
                    <div class="col banner">
                        <img class="fit" src="images/chr/process.png" alt="My Design Process for C.H. Robinson">
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Research & Findings -->
    <a class="row full pstlgry collapsed" data-toggle="collapse" aria-expanded="false" style="border-bottom: 2px solid;padding-bottom: 2%;padding-top: 2%;text-decoration:none" href="#research">
        <div class="center" style="display: inline-flex;">
            <i class="material-icons cont-arrow exp">expand_more</i>
            <i class="material-icons cont-arrow min">expand_less</i>    
            <h2>Research</h2>
        </div>
    </a>

    <div class="crm collapse" id="research">
        <div class="content">
            <h5 style="margin-top:5%;">Initial Research</h5>
            <p>Our research began with identifying the key data elements needed by administration so we could focus on improving how the data is collected. Once we had the items identified we then proceeded by documenting the current steps users take to report their time.</p>
            <p>We compared their steps against other products available on the market to determine how to influence a positive workflow</p>

            <h5>User Sketch Session</h5>
            <p>To begin the UI development, we brought in users from different levels and departments so we could gather research on their visual workflow process. Each participant was allowed to draw on a blank template how they would redesign the tool. We followed this up with an open discussion to their designs and documented the major items and themes.</p>
            <div class="img">
                <img class="fit" src="images/chr/whiteboard.jpg" alt="Whiteboarding">
                <p class="img-desc">User Sketch Session</p>
            </div>

            <h5>Usability Testing</h5>
            <p>We processed the initial research and sketchs to develop an interactive prototype. Our first prototype was tested with four users and then discussed with administration to determine implementation restrictions. We then produced multiple versions and tested over the next two weeks to conduct a total of nine usability tests.</p>
            <div class="row">
                <div class="col-6 space">
                    <img class="fit" src="images/chr/login.png" alt="Time Tracking Application - Login">
                    <p class="img-desc">Users will be able to get feedback when a false password is used.</p>
                </div>
                <div class="col-6 space">
                    <img class="fit" src="images/chr/main.png" alt="Time Tracking Application - Main Page">
                    <p class="img-desc">This is the main screen for the time tracking application. Users will be able to identify and set "favorites" on the left to identify frequent projects.</p>
                </div>
                <div class="col-6 space">
                    <img class="fit" src="images/chr/entry.png" alt="Time Tracking Application - Time Entry">
                    <p class="img-desc">Inputing numbers users will begin to see their total for the week as well as indicators for time above eight hours.</p>
                </div>
                <div class="col-6 space">
                    <img class="fit" src="images/chr/presets.png" alt="Time Tracking Application - Presets">
                    <p class="img-desc">Users will be able to setup automated project population for repeatitive tasks. This will enable the user to improve workflow efficiency.</p>
                </div>

            </div>


            <h5>Affinity Diagram</h5>
            <p>We synthesized our data and identified multiple areas that needed to be improved upon. We found that users wanted features that would enable them to streamline their submission to minimize time spent allocating time.</p>
            <img class="fit" src="images/chr/affinity_diagram.jpg" alt="Affinity Diagram">
            <p class="img-desc">Affinity Diagram</p>

            <h5>Findings</h5>
            <p>Users found it difficult to identify under which item they needed to input time, how they could automate their workflow, and visibly see preferred items. These issues caused users to be unhappy and their submissions inaccurate.</p>
        </div>
    </div>




    <!-- Prototype -->
    <a class="row full gld collapsed" style="border-bottom: 2px solid;padding-bottom: 2%;padding-top: 2%;text-decoration:none" target="_blank" href="https://dlsocn.axshare.com/#c=2">
    <h2 class="center" style="margin: 0px auto">View Prototype</h2></a>

    
    <!-- Bottom -->
    <div class="deepblu" style="padding-top:10%"></div>


<?php
    include "global/footer.php";
?>