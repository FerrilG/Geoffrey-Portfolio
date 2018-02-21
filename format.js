    function mobileMenu() {
                var x=document.getElementById("myTopnav")
                if (x.className==="col-sm-3 header topnav") {
                    x.className+=" responsive";
                }
                else {;
                    x.className="col-sm-3 header topnav"
                }
            };


//        jQuery(function () {
  //          $('.sidebar .button a').click(function () {
    //            var $heading = $(this).closest('.button').addClass("active");
      //          $('.sidebar .button.active').not($heading).removeClass('active');
        //    })
        //})