<?php

    $title= "BackpackEMR Project";
    $currentPage = 'work';
    $subpage = 'emr';

    include "global/header.php";
?>

<div class="col full">



    <!-- Head --> 
    <div class="row full crm" style="padding-top:5%;padding-bottom:2%">
        <div class="container-fluid center-text">
            <img class="fit banner" src="images/emr/emr_project_banner.png" alt="My Solution for BackpackEMR">
        </div>
    </div>

    <div class="row full title deepblu" style="border-bottom: 2px solid;">
        <div class="center" style="overflow:hidden">
            <h1 id="title" style="text-decoration:none">BACKPACK EMR</h1>
        </div>
    </div>




    <!-- Tools -->
    <div class="crm" id="tools">
        <div class="row" style="padding-bottom:5%;padding-top:5%;">
            <div class="col center-text" style="border-right: 1px solid;">
                <h4 class="list">Methods</h2>
                <ul class="method-list center">
                    <li>Journey Maps</li>
                    <li>Kano Analysis</li>
                    <li>Market Research</li>
                    <li>Wireframes<li>
                </ul>
            </div>

            <div class="col center-text" style="border-left: 1px solid;">
                <h4 class="list">Tools</h2>
                <ul class="method-list center">
                    <li>Axure</li>
                    <li>Illustrator</li>
                    <li>Whiteboarding</li>
                    <li>Pen & Paper</li>
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
            <p>BackpackEMR came to me with multiple problems that fell under a single issue they wanted solved:</p>
            <p class="center-text" style="font-size:1.4rem">We need a metric module that will allow volunteers, administration, and financial supporters to gauge operational efficiency during and after medical mission trips.</p>
            <p>While being constrained by budget limitations, BackpackEMR was open to all ideas to help them provide users with trip reports.</p>              
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
            <p>After discussing with their CEO to understand BackpackEMR's mission I was able to evaluate other services that provide similar solutions to baseline what a prototype would look like.</p>
            <p>Delivering these rough wireframes to potential users, doctors and administration, I ranked each feature's impact per user rating and which feature would fit the budget to create a meaningful solution.</p>
            <p>Taking the project further would include buing a high fidelity prototype to begin usability testing to refine the solution before delivering to the development team to implement.</p>
            <div class="container-fluid" style="margin-top:5%;padding-bottom:1.5em;">
                <div class="row justify-content-center">
                    <div class="col banner">
                        <img class="fit" src="images/emr/emr_design.png" alt="My Design Process for BackpackEMR">
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
            <p>After gaining an understanding of what their software provides, I was able to compare this to competitors and how they compiled data. This only left me with one problem, what do BackpackEMR's users want and why do they felt this way.</p>

            <h5>Kano Analysis</h5>
            <p>Since we did not have direct access to users I built low-fidelity wireframes to conduct a kano analysis. This way they could evaluate the impact it had allowing me to rank against the development quote received.</p>
            <div class="row">
                <div class="col-6 space">
                    <img class="fit" src="images/emr/patient_progress.png" alt="Patient Progress Tracker">
                    <p class="img-desc">Patient Progress</p>
                </div>
                <div class="col-6 space">
                    <img class="fit" src="images/emr/xray_module.png" alt="Xray Module">
                    <p class="img-desc">Xray Module</p>
                </div>
                <div class="col-6 space">
                    <img class="fit" src="images/emr/inventory.png" alt="medical inventory">
                    <p class="img-desc">Medical Inventory</p>
                </div>
                <div class="col-6 space">
                    <img class="fit " src="images/emr/clock.png" alt="Visit Duration">
                    <p class="img-desc">Visit Duration</p>
                </div>
            </div>
            
            <h6>Kano Analysis Results</h6>
            <img class="fit " src="images/emr/kano_graph.png" alt="Kano Analysis Graph">
            <p class="img-desc">Kano Analysis Graph</p>

            <h5>Journey Map</h5>
            <p>Taking the information gathered from BackpackEMR I built a journey map to visualize how the average volunteer evaluating MOI decides to get involved. The journey starts off rough because of the confusing name and verbage they use.</p>
            <img class="fit" src="images/emr/journey_map_updated.png" alt="Current Journey Map">
            <p class="img-desc">Current Journey Map</p
            >
            <h5>Findings</h5>
            <p>Now I knew the features that users wanted and was able to refine my solutions to address their problem. Users found it difficult to evaluate the impact their mission trips had while on-site and at home when following up. Preventing them from successful campaigns for financial support.</p>

            <h5>Solution</h5>
            <p>My solution was to design a module that would export independent metrics so users can reflect upon the daily administration and campaign as a whole to plan future campaigns accordingly. I thought about how I could effectively achieve this and decided to proceed with the inventory tracking and patient status metrics, along with the export feature because they were ranked among the top features that fit within budget.</p>
        </div>
    </div>




    <!-- Prototype -->
    <a class="row full gld collapsed" style="border-bottom: 2px solid;padding-bottom: 2%;padding-top: 2%;text-decoration:none" target="_blank" href="https://szzp7h.axshare.com/#c=2">
    <h2 class="center" style="margin: 0px auto">View Prototype</h2></a>

    
    <!-- Bottom -->
    <div class="deepblu" style="padding-top:10%"></div>


<?php
    include "global/footer.php";
?>