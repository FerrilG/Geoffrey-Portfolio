<!DOCTYPE html>
<html>

<head>
<meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
<link rel="canonical" href="http://www.g.ferril.com/"/>
<meta property='og:title' content="Geoffrey Ferril's Portfolio"/>
<meta property='og:description' content="Geoffrey Ferril is a user experience architect, researcher, and designer living in the Minneapolis region."/>
<meta property="og:url" content="http://www.g.ferril.com/"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="/images/gf_favicon_128x128.png"/>
<meta property="og:image:width" content="129"/>
<meta property="og:image:height" content="129"/>
<meta itemprop="name" content="Geoffrey Ferril's Portfolio"/>
<meta itemprop="url" content="https://www.g.ferril.com/"/>
<meta itemprop="thumbnailUrl" content="/images/gf_favicon_128x128.png"/>
<link rel="image_src" href="http://www.g.ferril.com/images/gf_favicon_128x128.png" />
<meta itemprop="image" content="http://www.g.ferril.com/images/gf_favicon_128x128.png"/>
<meta name="twitter:title" content="Geoffrey Ferril's Portfolio"/>
<meta name="twitter:image" content="http://www.g.ferril.com/images/gf_favicon_128x128.png"/>
<meta name="twitter:url" content="http://www.g.ferril.com/"/>
<meta name="twitter:card" content="summary"/>
<meta name="description" content="Geoffrey Ferril's Portfolio and Biography." />


    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/png" href="/images/gf_favicon_128x128.png">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript" src="format.js"></script>    

<link rel="stylesheet" type="text/css" href="layout.css">
    <link href="https://fonts.googleapis.com/css?family=Khula|Raleway" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather|Open+Sans" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114105270-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-114105270-1');
    </script>


</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <!-- Header -->

            <div class="col-sm-3 header topnav" id="myTopnav">
            <div class="row sidebar">

<!-- LOGO -->

<div class="col-12 flip logo light">
        <a id="home" href="../home.php">
            <img id="logo" src="../images/gf_light.png" alt="Geoffrey Ferril's Portfolio">
        </a>
</div>


<div class="col-12 flip mobile-nav">
<a id="home" href="../home.php">
            <img id="logo" src="../images/gf_dark.png" alt="Geoffrey Ferril's Portfolio">
        </a>
        
<a href="javascript:void(0);" class="icon" onclick="mobileMenu()"><i class="material-icons" style="font-size:2rem;">menu</i></a>
</div>


<!-- Navigation -->


<div class="col-12 flip button mobile">
        <a class="header-button <?php if($currentPage =='home'){echo 'active';}?>" id="home" href="../home.php">About</a>
</div>

<!-- Navigation -->
<div class="col-12 flip button mobile">
    <div class="row header-button active" style="
    /* margin-left: -3%; */
">
        <a class="col-10" id="work" href="../work.php">Case Studies</a>
        <a class="col-2 active" style="top: -1px;right: 5px"; data-toggle="collapse" aria-expanded="true" id="work" href="#work-items"><i class="material-icons">expand_more</i></a>
    </div>
</div>


<div class="col-12 flip collapse <?php if($currentPage =='work'){echo 'show';}?>" style="margin-top:4px" id="work-items">

        <a class="header-button-sub <?php if($subpage =='chr'){echo 'active';}?>" id="chr-nav" href="../chr.php">C.H. Robinson</a>

        <a class="header-button-sub <?php if($subpage =='moi'){echo 'active';}?>" id="moi-nav" href="../moi.php">MOI</a>

        <a class="header-button-sub <?php if($subpage =='emr'){echo 'active';}?>" id="emr-nav" href="../emr.php">Backpack EMR</a>

        <a class="header-button-sub <?php if($subpage =='recreogo'){echo 'active';}?>" id="recreogo-nav" href="../recreogo.php">Recreogo</a>

        <a class="header-button-sub <?php if($subpage =='prime'){echo 'active';}?>" style="margin-bottom:4px" id="prime-nav" href="../prime.php">Prime Digital Academy</a>
        <div style="border-bottom:2px solid #0e5787;margin: auto 20%;"></div>

</div>


<div class="copyright">
        <a target="_blank" href="https://www.linkedin.com/in/geoffreyferril/">
<img class="social" src="../images/linkedin.png">
</a>
<p>©2018 Geoffrey Ferril</p>
</div>

</div>



            </div>
        
