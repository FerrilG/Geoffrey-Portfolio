<?php

    $title="Contact Geoffrey";
    $currentPage = 'contact';
    include($_SERVER['DOCUMENT_ROOT']."/global/header.php");
?>

<div class="col full">

    <div class="center-text deepblu">
        <h1>Send Geoffrey an Email</h2>
    </div>

    <!-- Email Form -->
    <div class="row full crm">
        <form method="get" action="entities/email.php">
            <label for="Name">Name:</label>
            <input type="text" name="name" id="name">
            
            <label for="Email">Email:</label>
            <input type="text" name="email" id="email">

            <label for="Subject">Subject:</label>
            <input type="text" name="subject" id="subject">

            <label for="Message">Message:</>
            <textarea name="message" id="message"></textarea>

            <input type="submit" name="send" value="Send Email"></input>
        </form>

    </div>


    <div class="row full lightblu">

        <p class="center-text" id="bio"> As demonstrated with the creation of this website (HTML, CSS, JavaScript, and PHP),
        I began my technological career from an early age. In early secondary school I was fascinated with my TI-84 calculator and
        its ability to build graphical programs. I spent countless hours programming games like Yahtzee, Tetris, and various other
        applications. This, with my love for Legos, drove my passion for critical problem solving. As I became proficient in Basic,
        I sought every chance I could to learn more including HTML, CSS, Batch, Visual Basic, C++, C#, php, and Lua.
        <br>
        <br>
        <br>
        While studying Business Administration in college, I simultaneously worked my way up from a contractor role to a full-time position for
        in-house work focusing on digital design that included print media, web graphics, illustrations, video animation, and production.
        I utilized this tenure to understand the professional culture, project implementation, and sales processes.
        <br>
        <br>
        <br>
        In 2016 I decided to pursue my childhood passion of building solutions. The answer to this was user experience design. With the versatile skills
        I have gained at Prime and in the field of design, I am confident in my ability to deliver positive and effective strategies
        to increase both user satisfaction and retention.</p>
    </div>

    <!-- Abilities -->
    <div class="row full crm">
        <div class="container-fluid">
        <div class="row justify-content-center">
        
        <strong><h1>Technical Skills</h1></strong>
        
        </div>
        <br>
        <br>
        <div class="row justify-content-center">


                <div class="col center-text">

                <!-- ADOBE CC -->
                    <p>
                        <h2>ADOBE CC</h2><strong>
                        <br>
                        Illustrator
                        <br>
                        Photoshop
                        <br>
                        InDesign
                        <br>
                        Premier Pro
                        <br>
                        After Effects</strong>
                        <br>
                        <br>
                        <br>
                        <!-- Wireframing -->
                        <h2>WIREFRAMING</h2><strong>
                        <br>
                        RealTimeBoard
                        <br>
                        Omnigraffle
                        <br>
                        Sketch
                        <br>
                        Adobe XD</strong>
                    </p>     
                </div>

                <div class="col center-text">

                    <!-- PROTOTYPING -->
                    <p>
                        <h2>PROTOTYPING</h2><strong>
                        <br>
                        Axure RP
                        <br>
                        InVision</strong>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <!-- Software -->
                        <h2>PROGRAMMING</h2><strong>
                        <br>
                        HTML
                        <br>
                        CSS
                        <br>
                        JavaScript
                        <br>
                        PHP
                        <br>
                        </strong>
                    </p>                
                </div>                
            </div>
        </div>
    </div>






    <!-- Passion -->
    <div class="row full lightblu">
        <div class="container-fluid">

        <div class="row justify-content-center">
        
        <strong><h1>Hobbies</h1></strong>
        
        </div>
        <br>
        <br>
        
            <div class="row justify-content-center">
                <div class="col">
                <div class="mask">
                <img class="fit img-overlay" src="images/excitement.png" alt="Geoffrey Motorcycle Riding">
                <div class="img-overlay-text">EXCITEMENT</div>
            </div>
                </div>
                <div class="col">
                    <div class="mask">
                        <img class="fit img-overlay" src="images/scuba.png" alt=" Geoffrey Scuba Diving">
                        <div class="img-overlay-text">ADVENTURE</div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col">
                <div class="mask">
                <img class="fit img-overlay" src="images/explore.png" alt="Geoffrey in Florence">
                <div class="img-overlay-text">EXPLORING</div>
            </div>
                </div>
                <div class="col">
                    <div class="mask">
                        <img class="fit img-overlay" src="images/sightsee.png" alt="Geoffrey Skydiving">
                        <div class="img-overlay-text">SIGHTSEEING</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>








<?php
include($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');
?>