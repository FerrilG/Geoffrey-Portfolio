
<?php
    $title="Geoffrey's Portfolio";
    $currentPage="work";
    include($_SERVER['DOCUMENT_ROOT']."/global/header.php");
?>



<div class="col full" id="content_area">

    <!-- C.H. Robinson -->
    <div class="row full selection" onclick="location.href='chr.php';">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/chr/CHR_LogoTM_Horz_2C_RGB.png" alt="C.H. Robinson's Logo">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="chr-description">
                        <h1 class="project-title" id="chr-title">Enterprise Application</h1>
                        <h4 class="project-type" id="chr-type">UX/UI Design</h4>
                    </div>
                </div>
            </div>

            <h6 class="container-fluid project-summary" id="chr-summary">
                            Collaborated with two team members to provide C.H. Robinson with an improved EUX tool.
                        </h6>

        </div>
    </div>


    <!-- MOI -->
    <div class="row full selection" onclick="location.href='moi.php';">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/moi/logo.png" alt="MOI's Logo">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="moi-description">
                        <h1 class="project-title" id="moi-title">Business Strategy</h1>
                        <h4 class="project-type" id="moi-type">UX Design</h4>
                    </div>
                </div>
            </div>
            <h6 class="container-fluid project-summary" id="moi-summary">
            Worked as an independent contractor to increase Mid-Continent Oceanographic Institute's community involvement.
                        </h6>
        </div>
    </div>


    <!-- BackpackEMR -->
    <div class="row full selection" onclick="location.href='emr.php';">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/emr/logo_2.png" alt="BackpackEMR's Logo" style="min-width:115px;max-width:50%;">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="emr-description">
                        <h1 class="project-title" id="emr-title">iPad Application</h1>
                        <h4 class="project-type" id="emr-type">UX/UI Design</h4>
                    </div>
                </div>
            </div>
            <h6 class="container-fluid project-summary" id="emr-summary">
            Collaborated with a design team to add metric gathering for BackpackEMR's medical application.
        </h6>

        </div>
    </div>

    
    <!-- Recreogo -->
        <div class="row full selection" onclick="location.href='recreogo.php';">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/recreogo/logo_small.png" alt="Recreogo's Logo">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="recreogo-description">
                        <h1 class="project-title" id="recreogo-title">Website Design</h1>
                        <h4 class="project-type" id="recreogo-type">UX/UI Design</h4>
                        
                    </div>
                </div>
            </div>
            <h6 class="container-fluid project-summary" id="recreogo-summary">
                Improved the workflow of Recreogo's software and tailored to customers and clients.
            </h6>
        </div>
    </div>


    <!-- Prime Digital Academy -->
    <div class="row full selection" onclick="location.href='prime.php';">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/prime/logo-prime-horizontal.svg" alt="Prime's Logo">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="prime-description">
                        <h1 class="project-title" id="prime-title">Business Strategy</h1>
                        <h4 class="project-type" id="prime-type">UX Design</h4>
                    </div>
                </div>
            </div>
            <h6 class="container-fluid project-summary" id="prime-summary">
                Proposed multiple solutions to Prime Digital Academy's administration to increase student applicants.
            </h6>
        </div>
    </div>


    <!-- PeopleSourced Policy -->
    <div class="row full selection" onclick="location.href='psp.php';">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/psp/psp-logo-vert.png" alt="PeopleSourced Policy's Logo">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="psp-description">
                        <h1 class="project-title" id="psp-title">Mobile App</h1>
                        <h4 class="project-type" id="psp-type">UX/UI Design</h4>
                    </div>
                </div>
            </div>
            <h6 class="container-fluid project-summary" id="psp-summary">
            Collaborated with team members to improve PeopleSourced Policy's e-learning application.
        </h6>
        </div>
    </div>

<div class="separator"></div>

    <div class="row full selection" onclick="location.href='design.php';">
        <div class="container-fluid">

            <div class="row justify-content-center align-items-center toggle">
                <div class="col">
                    <div class="fit">
                        <img class="center" src="images/design/identiSys_logo.png" alt="IdentiSys's Logo">
                    </div>
                </div>
                
                <div class="col">
                    <div class="project-description" id="design-description">
                        <h1 class="project-title" id="design-title">IdentiSys Designs</h1>
                        <h4 class="project-type" id="design-type">Graphic Design</h4>
                    </div>
                </div>
            </div>
            <h6 class="container-fluid project-summary" id="design-summary">
            Some graphic pieces from my collection designed for IdentiSys.
        </h6>
        </div>
    </div>


    
</div>

<?php

include($_SERVER['DOCUMENT_ROOT'].'/global/footer.php');

?>