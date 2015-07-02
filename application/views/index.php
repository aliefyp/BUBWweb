<!DOCTYPE html>
<html lang="en">
  <head>
	   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>Creating a Simple Parallax Scrolling Website</title>
       <link rel="stylesheet" href="assets/css/bootstrap.css"/>
       <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
       <link rel="stylesheet" href="assets/css/style.css"/>
       <link rel="stylesheet" href="assets/css/custom.css"/>
	   <script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script>
       <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Wellfleet' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css'>	
	   <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Goudy+Bookletter+1911' rel='stylesheet' type='text/css'>
	   <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	
	<!-- Start WOWSlider.com HEAD section -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->



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
	
<body>
<!-- LINK BACK TO THE TUTORIAL-->  
<!--<div id="demo_back">
<a href="#" class="lpanel"> << BACK TO THE 1STWEBDESIGN ARTICLE </a>
<a href="#" class="rpanel"> NEXT DEMO >> </a>
</div>-->

<!-- HEADER START-->   
<header id="header">
<div class="container">
<div id="logo"><a href=""> BUBW </a></div>

<nav id="nav">
	<ul>
		<li><a href="#slide1" class="active" title="Next Section" >Home</a></li>
		<li><a href="#slide2" title="Next Section">Slide2</a></li>
		<li><a href="#slide2ext" title="Next Section">Slide3</a></li>
		<li><a  href="#slide4" title="Next Section">Slide 4</a></li>
		<li><a href="#slide5" title="Next Section">Slide 5</a></li>
	</ul>
</nav>
</div>
</header>	
<!--HEADER END-->   

<!-- SLIDES START -->   	
	<div id="slide1">
		<div class="container">
			<img class="section logo img-responsive" alt="Responsive image" src="assets/img/logo.png">
	        <img class="section tagline img-responsive" alt="Responsive image" src="assets/img/tagline.png">
		</div> 
    </div> 

	<div id="slide2">
	    <div class="container slide">
	      <div class="row" style="text-align:center">
	        <div class="col-md-6 col-sm-12">
	          <h2 class="hl">H I G H L I G H T S</h2>
	          <iframe width="500" height="260" src="https://www.youtube.com/embed/xkDDESlO5dM" autoplay="1" frameborder="0" allowfullscreen></iframe>
	          <img src="assets/img/shadow.png" alt="Responsive image" class="img-responsive shadow ">
	        </div>
	        <div class="col-md-6 col-sm-12">
	          <h3>...</h3>
	          <div class="row">
	            <div class="col-md-6 col-sm-12 prev">
	              <h3>Previous Conference</h3>
	              <p>CECF is offering its 19th annual conference in Orlando, FL to American high school students and ECA grant exchange students studying in the U.S. under the auspices of the Department of State’s exchange programs.</p>
	              <a href="http://www.bubw.org" style="font-size:14px" target="_blank">Read more</a>
	            </div>
	            <div class="col-md-6 col-sm-12 prev">
	              <h3>Recent Post</h3>
	              <p>CECF is offering its 19th annual conference in Orlando, FL to American high school students and ECA grant exchange students studying in the U.S. under the auspices of the Department of State’s exchange programs.</p>
	              <a href="http://www.bubw.org" style="font-size:14px" target="_blank">Read more</a>
	            </div>
	          </div>
	          <a href="http://www.bubw.org" class="btn btn-info btn-lg morenews" role="button" target="_blank">MORE NEWS!</a>
	        </div>
	      </div>
	    </div>	    
    </div> 

    <div id="slide2">
	    <div id="slide2ext" class="container slide" style="padding-top:100px">
	      <div class="row">
	            <div class="col-md-6 col-sm-6">
	              <div class="page-header">
	                <h1 style="font-size:60px;">H E A D L I N E</h1>
	              </div>
	              <p class="headline">BUBW Conferences are held annually in Florida, California and Maryland – USA.
	              Nowadays International BUBW Conferences are taking aim to spread the message all around the world.
	              In 2016, International BUBW Conferences will be conducted in Kyrgyzstan for the youth / young professionals of Central Asia, in Turkey for Europe and in Uganda for East Africa.
	              <br><br><strong>This year, 2015, INDONESIA</strong> will host the International BUBW Conference in December for the youth / young professionals of Southeast Asia.
	              </p>
	            </div>
	            <div class="col-md-6 col-sm-6">
	              <img src="assets/img/dance.png" class="img-responsive giant" alt="Responsive image">
	            </div>
	          </div>
	    </div>	    
    </div> 
	
	
   <div id="slide3">
		<div class="container slide">
	    	<!-- Start WOWSlider.com BODY section -->
	        <!--<div id="wowslider-container1">
	          <div class="ws_images"><ul>
	             <li><img src="data1/images/img4.jpg" alt="" title="" id="wows1_0"/></li>
	             <li><img src="data1/images/img1.jpg" alt="" title="" id="wows1_1"/></li>
	             <li><a href="http://wowslider.com"><img src="data1/images/img2.jpg" alt="image carousel" title="" id="wows1_2"/></a></li>
	              <li><img src="data1/images/img3.jpg" alt="" title="" id="wows1_3"/></li>
	            </ul>
	          </div>
	          <div class="ws_bullets">
	            <div>
	               <a href="#" title=""><span><img src="data1/tooltips/img4.jpg" alt=""/>1</span></a>
	               <a href="#" title=""><span><img src="data1/tooltips/img1.jpg" alt=""/>2</span></a>
	               <a href="#" title=""><span><img src="data1/tooltips/img2.jpg" alt=""/>3</span></a>
	               <a href="#" title=""><span><img src="data1/tooltips/img3.jpg" alt=""/>4</span></a>
	             </div>
	          </div>
	          <div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com">jquery carousel</a> by WOWSlider.com v8.2</div>
	          <div class="ws_shadow"></div>
	        </div>  
	        <script type="text/javascript" src="engine1/wowslider.js"></script>
	        <script type="text/javascript" src="engine1/script.js"></script>
	        <!-- End WOWSlider.com BODY section -->
			<h1 style="font-size:36px; color:white">D E C E M B E R&nbsp&nbsp2 0 1 5</h1>
			<h1 style="font-size:72px; color:white">Welcome to Indonesia!</h1>
	    </div>
    </div> 
	
	
	<div id="slide4">
		<div class="content">
              <div class="quotes_container">
		    <h3 class="quotes">“Christmas doesn't come from a store, maybe Christmas perhaps means a little bit more....” </h3>
		  <img src="assets/img/dr-seuss.png" align="left"/> <h4 class="author_name_gray">Dr. Seuss </h4>
		</div> 
		</div> 
    </div> 
	
	
	<div id="slide5">
		<div class="content">
           <div class="quotes_container">
		    <h3 class="quotes">“My idea of Christmas, whether old-fashioned or modern, is very simple: loving others. Come to think of it, why do we have to wait for Christmas to do that?” </h3>
		    <img src="assets/img/bob.png" align="left"/> <h4 class="author_name_white">Bob Hope </h4>
		  </div> 
		<div id="copyright"><a href="http://www.1stwebdesigner.com/">Copyright 1stwebdesigner.com </a></div>  
		</div> 
		

    </div> 
	
<!----- SLIDES END --->

</body>
</html>
