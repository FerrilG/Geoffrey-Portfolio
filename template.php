<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
        <script type="text/javascript" rel="stylesheet" src="format.js"></script>    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<style>
        /* Global Style */

        .container-fluid {

padding: 0px 3%;
min-width: 385px;
max-width: 1140px;
}


/* Header Styling */

.header {
position: sticky;
top: 0px;
float: left;
background: rgb(158, 16, 16);
overflow: hidden;
z-index: 1;
}


#logo {
width: 100%;
max-width: 65px;
}

.col {
flex-basis: unset;
}



/* Page Styling */

.content {
background: rgb(56, 19, 189);
}

.list {
margin: 5% 0px;
padding: 2%;
background: rgb(49, 209, 9);
}












.blk {
background: #000;
}

.drkblu {
background: #000B19;
}

.deepblu {
background: #00213b;
}

.cement {
background: #caccca;
}

.paste {
background: #576366;
}

.pstlblk {
background: #1c1d21;
}

.pstlgry {
background: #31353d;
}

.pstlblu {
background: #445878;
}

.wtrblu {
background: #92cdcf;
}

.crm {
background: #eeeff7;
}







/* Text Modification */

p {
margin: 0px;
padding: 15px 0px;
font-family: 'Raleway', sans-serif;
font-size: .8em;
color: #000B19;
}



a {
color: #000B19;
}

a.header-button:hover {
color: #eeeff7;
text-decoration: none;
}

a:link.header-button {
margin: 10px auto;
display: block;
text-align: center;
white-space: nowrap;
}


/* Display Modifications */

@media only screen and (min-width: 576px) {
.header {
    height: 100vh;
    min-width: 125px;
}

#logo {
    display: block;
    margin: 0px auto;
}
}

.topnav {
overflow: hidden;
background-color: #333;
}

.topnav a {
display: block;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 1em;
}

.topnav a.header-button {
display: block;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 1em;
}

.topnav a.header-button:hover {
background-color: #ddd;
color: black;
}

.active {
background-color: #4CAF50;
color: white;
}

.topnav .icon {
display: none;
}

@media only screen and (max-width: 576px) {
.topnav a {
    float: left;

}
.topnav .col:not(:first-child) {
    display: none;
}
.topnav a.icon {
    float: right;
    display: block;
}

.topnav .icon {
    position: absolute;
    right: 0;
    top: 0;
}
.topnav.responsive .col {
    float: none;
    display: block;
    text-align: left;

}


.container-fluid {
    background: gray;
    padding: 0px 15px;
}



.header {
    width: 100%;
    background: rgb(158, 16, 16);
}

#logo {
    width: auto;
    max-height: 4vh;
}
}

</style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Header -->

            <div class="col-sm-2 header topnav" id="myTopnav">
                <div class="row sidebar">

                    <!-- LOGO -->

                    <div class="col logo">
                            <a id="home" href="#">
                                <img id="logo" src="images/gf_new.png" alt="Geoffrey Ferril's Portfolio">
                            </a>
                    </div>

                    <!-- Navigation -->

                    <div class="col active">
                            <a class="header-button" id="work" href="home.php">Work</a>
                    </div>

                    <div class="col">
                            <a class="header-button" id="about" href="about.php">About</a>
                    </div>

                    <div class="col">
                            <a class="header-button" id="contact" href="contact.php">Contact</a>
                    </div>
                    <a href="javascript:void(0);" style="font-size:1.2em;" class="icon" onclick="mobileMenu()">&#9776;</a>
                </div>
            </div>

            <!-- content -->

            <div class="col-sm" id="content_area">
                <?php echo $content; ?>
            </div>
        </div>
    </div>
</body>

</html>