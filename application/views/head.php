<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>BUBW Indonesia</title>
		<link rel="shortcut icon" href="<?php echo base_url('')?>assets/img/favicon.png">
		<!--New Page Transition
		<link rel="stylesheet" type="text/css" href="assets/newpage/css/component.css" />
		<script src="assets/newpage/js/modernizr.custom.js"></script>-->

		<!--Bootstrap-->
		<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/bootstrap.css"/>
		<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/bootstrap.min.css"/>
  		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		
		

		<!--Hover Effect-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/hover/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/hover/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/hover/css/set2.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>assets/hover/fonts/font-awesome-4.2.0/css/font-awesome.min.css" />
		
		<!--Parallax-->
		<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/style.css"/>
		
		<!--Custom-->
		<link rel="stylesheet" href="<?php echo base_url('')?>assets/css/custom.css"/>
		
		<!--JQuery-->
		<script type="text/javascript" src="<?php echo base_url('')?>assets/js/jquery-1.10.2.min.js"></script>
		<!--Fonts-->
		<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>	
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>



		<!-- Start WOWSlider.com HEAD section -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('')?>engine1/style.css" />
		<script type="text/javascript" src="<?php echo base_url('')?>engine1/jquery.js"></script>
		<!-- End WOWSlider.com HEAD section -->


		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

	<script>
   
<!----- JQUERY FOR SLIDING NAVIGATION --->   
$(document).ready(function() {
  $('a[href*=#]').each(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
    && location.hostname == this.hostname
    && this.hash.replace(/#/,'') ) {
      var $targetId = $(this.hash), $targetAnchor = $('[name=' + this.hash.slice(1) +']');
      var $target = $targetId.length ? $targetId : $targetAnchor.length ? $targetAnchor : false;
       if ($target) {
         var targetOffset = $target.offset().top;

<!----- JQUERY CLICK FUNCTION REMOVE AND ADD CLASS "ACTIVE" + SCROLL TO THE #DIV--->   
         $(this).click(function() {
            $("#nav li a").removeClass("active");
            $(this).addClass('active');
           $('html, body').animate({scrollTop: targetOffset}, 1000);
           return false;
         });
      }
    }
  });

});


</script>


 </head> 