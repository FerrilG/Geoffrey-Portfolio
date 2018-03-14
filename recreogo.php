<?php

    $title= "Recreogo Project";
    $currentPage = 'work';
    $subpage = 'recreogo';

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
            <h1 id="title" style="text-decoration:none">RECREOGO</h1>
        </div>
    </div>




    <!-- Tools -->
    <div class="crm" id="tools">
        <div class="row" style="padding-bottom:5%;padding-top:5%;">
            <div class="col center-text" style="border-right: 1px solid;">
                <h4 class="list">Methods</h2>
                <ul class="method-list center">
                    <li>Competetive Analysis</li>
                    <li>Cognitive Walkthrough</li>
                    <li>Contextual Inquiries</li>
                    <li>Prototyping<li>
                </ul>
            </div>

            <div class="col center-text" style="border-left: 1px solid;">
                <h4 class="list">Tools</h2>
                <ul class="method-list center">
                    <li>InVision</li>
                    <li>Sketch</li>
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
            <p>Recreogo had one underlining issue they wanted to address:</p>
            <p class="center-text" style="font-size:1.4rem">How can I improve business owners and customers experience when processing rental transactions with my service?</p>
            <p>From creating process diagrams to interactive prototypes, Recreogo was open to all forms of feedback that would help retain their current and future clients.</p>       
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
            <p>After talking to MOI's executive director, I researched other organizations  to see how they market their services to the community. I built surveys and a prototype of MOI's website to evaluate with community members.</p>
            <p>I synthesized the results from both and concluded people were confused by the lack of consistency with brand identification.</p>
            <p>Taking this project further would have included a website re-branding, physical brochures, and surveys to create a stable sense of identification.</p>                
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
            <h5 style="margin-top:5%;">User Research</h5>
            <p>I began my research by conducting a cognitive walkthrough to understand each action and the learnability of the software in which to achieve it. After spending about an hour or two with their service, I was able to formulate a basic understanding of issues users were having. I had the opportunity to go to a users work environment to understand how it fit in with their workflow. I interviewed them to understand their frustrations and pain-points.</p>

            <div class="row">
                <div class="col-6 space">
                    <img class="fit" src="images/recreogo/conitive_walkthrough.jpg" alt="Conitive Walkthrough">
                    <p class="img-desc">Cognitive Walkthrough</p>
                </div>
                <div class="col-6 space">
                    <img class="fit " src="images/recreogo/contextual_inquirey.jpg" alt="Contextual Inquiry">
                    <p class="img-desc">Contextual Inquirey</p>
                </div>
            </div>

            
            <h5>Wireframes</h5>
            <p>To begin the UI development, I created wireframes to visualize what the features would look like and the interaction flow. I then built an interactive prototype to test functionality and make sure I addressed both types of users.</p>
            <div class="row">
                <div class="col-6 space">
                    <img class="fit " src="images/recreogo/user_wireframe.png" alt="User Wireframes">
                    <p class="img-desc">Customer Wireframes</p>
                </div>
                <div class="col-6 space">
                    <img class="fit " src="images/recreogo/admin_wireframe.png" alt="Admin Wireframes">
                    <p class="img-desc">Admin Wireframes</p>
                </div>
            </div>
            
            <h5>Findings</h5>
            <p>Customers had difficulty locating additional information about the available equipment, while business owners were trying to reach customers with limited data fields.</p>
            
        </div>
    </div>




    <!-- Prototype -->
    <a class="row full gld collapsed" style="border-bottom: 2px solid;padding-bottom: 2%;padding-top: 2%;text-decoration:none" target="_blank" href="https://projects.invisionapp.com/share/MVEJ9M3W8#/screens/264673782">
    <h2 class="center" style="margin: 0px auto">View Prototype</h2></a>


    <div class="deepblu" style="padding-top:10%"></div>


<?php
    include "global/footer.php";
?>
<!--


