<!DOCTYPE html><!-- saved from url=(0066)http://twitter.github.com/bootstrap/examples/starter-template.html -->
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <title>Balor</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="Bringing your order system to the next generation.">
      <meta name="author" content="Balor LLC">
      <!-- Le styles --> 
      <link href="bootstrap.css" rel="stylesheet">
      <link href="bootstrap-responsive.css" rel="stylesheet">
      <link href="elastislide.css" rel="stylesheet">
      <link href="fancybox.css" rel="stylesheet">
      <link href="animate.css" rel="stylesheet">
      <link href="style.css" rel="stylesheet">
      <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements --> <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> <!-- Le fav and touch icons --> 
      <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.ico">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
   </head>
   <body>
      <!-- Beginning of Content ================================================== -->  
      <div class="container">
         <header>
            <!-- Title and Subtitle Section --> 
            <h1>Balor</h1>
            <p>Lets take the annoyance of queueing out of ordering a drink. Stop the worry that your tab is growing out of control. Subscribe to be notified when it's available, or follow us on <a href="http://twitter.com/BalorTech">Twitter.</a></p>
            <div class="hero-unit">
               <!-- Newsletter form : Keep the id : newsletter on form--> 
<?php
if (isset($_REQUEST['email']))
//if "email" is filled out, send email
  {
  //send email
  $email = strip_tags($_REQUEST['email']) ;
  $subject = "Subscription";
  $message = "Email Address: " . $email ;
  mail("contact@balortech.com", $subject,
  $message, "From:" . $email);
?>
               <form class="form-horizontal" id="newsletter" >
                  <p>Thank you for registering your interest, we will keep you in the loop!</p>
               </form>
<?php
  }
else
//if "email" is not filled out, display the form
  {
?>

               <form class="form-horizontal" id="newsletter" action="mail.php">
                  <div class="control-group">
                     <div class="controls"> <input type="email" name="email" placeholder="Enter your email address to be notified"> <input type="submit" value="Go !"> </div>
                  </div>
               </form>
<?php
   }
?>
               <!-- end #newsletter -->
            </div>
            <!-- end .hero-unit -->
         </header>
         <section>
            <!-- Tabbed Content Section --><!-- In <ul class="nav nav-pills">, add the sections you want to have following this markup : <li><a href="#TAB_ID" data-toggle="tab">TAB_TITLE</a></li>Make sure that the first <li> item has the class : "active"Change TAB_ID and TAB_TITLE for each sectionIn <div class="tab-content">, add a section for each tab referenced above following this markup :<div class="tab-pane" id="TAB_ID">CONTENT</div>Make sure the first tab-pane has the class : "active"Change TAB_ID according to the ID in <ul class="nav nav-pills"> and fill in your content -->
            <div class="nav-menu">
               <ul class="nav nav-pills">
                  <li class="active"><a href="#tab1" data-toggle="tab">Features</a></li>
                  <li><a href="#tab2" data-toggle="tab">About Us</a></li>
                  <li><a href="#tab3" data-toggle="tab">Contact Us</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                     <!-- example content -->  
                     <div class="row-fluid clearfix">
                        <div class="span4">
                           <h4><i class="icon-globe icon-white"></i> NFC Powered</h4>
                           <p> Why do you have to wait for the bartender to approach you to give them your order? Entering your order via NFC insures no miscommunication and lets the bartender know at a glance what you want. </p>
                        </div>
                        <div class="span4">
                           <h4><i class="icon-star icon-white"></i> Paypal Integrated</h4>
                           <p> Dealing with credit cards or even cash can be painful. How much do you tip? Did they lose your card? Integrated billing via Paypal avoids this. </p>
                        </div>
                        <div class="span4">
                           <h4><i class="icon-gift icon-white"></i> History Leveraged</h4>
                           <p> With your order history within a click, you can order your favorities that much faster. Be recognized for your past purcahses and recieve top service. </p>
                        </div>
                     </div>
                     <!-- end of example content --> 
                  </div>
                  <div class="tab-pane" id="tab2">
                     <!-- example content --> 
                     <div class="row-fluid clearfix">
                        <div class="span8">
                           <blockquote>
                              <p>Co-founder</p>
                              <small>John Doyle</small> 
                           </blockquote>
                           <blockquote>
                              <p>Co-founder</p>
                              <small>Dermot Duncan</small> 
                           </blockquote>
                        </div>
                        <div class="span4"> Founded in Feb 2013, Balor LLC aims to produce products that revolutionize the service industry. Using technology to support bars and restaurants in catering to customers in the most efficient manner possible. </div>
                     </div>
                     <!-- end of example content --> 
                  </div>
                  <div class="tab-pane" id="tab3">
                     <!-- example content --> 
                     <div class="row-fluid clearfix">
                        <div class="span2"> </div>
                        <div class="span2">
                           Balor LLC,<br /> P.O. Box ###,<br /> Boston, MA<br /> 02109
                           <bt />
                           U.S.A 
                        </div>
                        <div class="span8">
                           <form class="form-horizontal">
                              <div class="control-group">
                                 <label class="control-label" for="input01">Your Name</label>
                                 <div class="controls"><input type="text" class="input-xlarge" id="input01"></div>
                              </div>
                              <div class="control-group">
                                 <label class="control-label" for="input02">Your Email</label>
                                 <div class="controls"><input type="text" class="input-xlarge" id="input02"></div>
                              </div>
                              <div class="control-group">
                                 <label class="control-label" for="input03">Message</label>
                                 <div class="controls"><textarea class="input-xlarge" id="input03" rows="3"></textarea></div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <!-- end of example content --> 
                  </div>
               </div>
            </div>
            <!-- end .nav-menu -->
            <hr>
            <!-- Gallery section --><!-- Markup for gallery : Add new images by simply copying any list item (content between <li></li>)In <a href="images/1.jpg …> : 1.jpg is the large imageIn <im src="images/1_thumb.jpg" …> : 1_thumb.jpg is the small image.It is recommended to have two versions for faster page loading speed. But you can still have <a href="images/1.jpg"…> and <img src="images/1.jpg"…>Every gallery is recognized by the attribute data-fancybox-group=""In this example, the value is gallery for all the images, this means when you openone image in lightbox, you can navigate through all the other images.You can create multiple galleries, just change "gallery" to the group-name you want : example "gallery1" for images 1 to 4 and "gallery2" for images 5 to 9, etc.Or you can disable gallery by leaving this attribute empty.-->
            <h3>Our Work</h3>
            <div class="hero-unit clearfix gallery">
               <div id="carousel" class="es-carousel-wrapper">
                  <div class="es-carousel">
                     <ul>
                        <li><a href="#" title="Image 1" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="https://dlnmh9ip6v2uc.cloudfront.net/images/products/9/9/5/0/09950-01.jpg" /></a></li>
                        <li><a href="#" title="Image 2" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="http://dangerousprototypes.com/wp-content/media/2012/08/bluenfcs-300x225.jpg" /></a></li>
                        <li><a href="#" title="Image 3" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTVUjIAJN9n9B93HHXCO1Q9qkqnypZP8hlNlb8vKJMN9L-FTUudhA" /></a></li>
                        <li><a href="#" title="Image 4" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="http://www.robotgear.com.au/Cache/Files/ProductImageOriginals/704_Arduino%20Xbee%20Shield%20-%20in%20use.jpg" /></a></li>
                        <li><a href="#" title="Image 5" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="http://cdn.pocket-lint.com/images/JRZw/acer-iconia-b1-review-pops-up-0.jpg?20130107-194740" /></a></li>
                        <li><a href="#" title="Image 6" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="http://static.trustedreviews.com/94%7C000023989%7C3659_s3fronts.jpg" /></a></li>
                        <li><a href="#" title="Image 7" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="http://b.vimeocdn.com/ps/245/615/2456152_300.jpg" /></a></li>
                        <li><a href="#" title="Image 8" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="https://s3.amazonaws.com/ksr/projects/381650/photo-main.jpg?1351818367" /></a></li>
                        <li><a href="#" title="Image 9" class="thumbnail fancybox" data-fancybox-group="gallery"><img src="http://cloudfront3.bostinno.com/wp-content/uploads/2010/12/nodejs.png" /></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </section>
      </div>
      <!-- /container --> <!-- Javascript ================================================== --> 
    <!-- Placed at the end of the document so the pages load faster --> 
	  <script src="jquery.js"></script> 
	  <script src="bootstrap.js"></script> 
	  <script src="elastislide.js"></script>  
	  <script src="fancybox.js"></script>  
	  <script src="scripts.js"></script>
   </body>
</html>