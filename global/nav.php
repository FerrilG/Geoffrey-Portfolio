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

<a href="javascript:void(0);" style="font-size:1.4em;" class="material-icons icon" onclick="mobileMenu()">☰</a>
</div>
<!-- Navigation -->


<div class="col-12 flip button mobile">
    <a class="header-button <?php if($currentPage =='home'){echo 'active';}?>" id="home" href="../home.php">About</a>
</div>




<div class="col-12 flip button mobile">
    <a class="header-button <?php if($currentPage =='work'){echo 'active';}?>" id="work" href="#">
        <div class="center" style="display: inline-flex;" onclick="window.location='../work.php';">Case Studies</div>
        <i class="material-icons cont-arrow exp <?php if($currentPage !='work'){echo 'collapsed';}?>" style="padding-left: 20px;position:absolute;" data-toggle="collapse" aria-expanded="true" href="#work-items">expand_more</i>
        <i class="material-icons cont-arrow min <?php if($currentPage !='work'){echo 'collapsed';}?>" style="padding-left: 20px;position:absolute;" data-toggle="collapse" aria-expanded="true" href="#work-items">expand_less</i>
    </a>
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


