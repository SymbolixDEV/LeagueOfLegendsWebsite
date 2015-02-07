<?php 



?>








<style>

@font-face { font-family: "allStar"; src: url('fonts/allStar.ttf'); } 
@font-face { font-family: "kodakku"; src: url('fonts/kodakku.ttf'); } 
@font-face { font-family: "steelfish"; src: url('fonts/steelfish.ttf'); } 


#slide2header{
  font-family: allStar;
  text-shadow: -3px 0 black, 0 3px black, 3px 0 black, 0 -3px black;
}

body {
  /* use to make scroller disapeer overflow: hidden; no idea-> width:100%;  */

padding-top: 40px;
margin-bottom: 60px;
background: url("pictures/background.jpg") no-repeat;
background-size: cover;
}

#siteName{
margin-top: 35px;
margin-bottom: 10px;
  text-align: center;
}



#champ3{
font-family: allStar;
font-size: 30px;
}

.jumbotron{

  margin-top:35px;
  height:200px;
}
.container {
  background-color: white !important;
  width: 1200px !important;
overflow: hidden;
}

.starter-template {
  padding: 40px 15px;
  text-align: center;
}

#navbar{
margin:5px;
}

.nav{
  
}

.nav-pills{
    display: inline-block;
}

.nav-pills > li > a {
  margin-right:10px; /* pill spread */
  font-family: "kodakku"; /* font */
  font-size: 20px;
}

/* Carousel base class */
.carousel {
  height: 300px;
  margin-bottom: 10px;

}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 300px;
  background-color: #777;
}
.carousel-inner > .item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 300px;
}

/* Featurettes
------------------------- */

.featurette-divider {
  margin: 15px 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
.featurette-heading {
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}

#homeHeader{
font-family: steelfish;
font-size: 45px;
color: black;
}




#terms{
  font-family: "Arial";
    font-size: 14px;
  font-weight: bold;

}

#policy{
    font-family: Steelfish;
    font-size: 50px;
}

.img-with-text {
    text-align: justify;
    width: 60px;
}

.img-with-text img {
    display: block;
    margin: 0 auto;
}



textarea{
  resize:none;
}

#left{
  width: 65%;
float: left;
}
#right{
  width: 35%;
float: right;
}





</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Twisted Treeline</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/prettify.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/ie-emulation-modes-warning.js"></script>
 

    
<script></script>
           
   
  </head>

  <body >

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div id="">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><img src="pictures/tinyTitle.png" ></a>
            </div>

            <div id="navbar" class="navbar-collapse collapse">
                <form class="navbar-form navbar-right" role="form">
                    <div class="form-group">
                    <input type="text" placeholder="Email" class="form-control">
                    </div>
                    <div class="form-group">
                    <input type="password" placeholder="Password" class="form-control">
                    </div>
                   <button type="submit" class="btn btn-info">Sign in</button>
                </form>
            </div><!--/.navbar-collapse -->
      </div>
    </nav>


       <div id="siteName">
        <img src="pictures/title.png" >
        <br>
        <img src="pictures/slogan.png" >

      </div>


 
    
 <div class="container">
   <div class="text-center">
         <ul class="nav nav-pills" role="tablist">
          <li role="presentation" ><a href="home.php">Home</a></li>
          <li role="presentation"><a href="tierlist.php">TierList</a></li>
          <li role="presentation"><a href="tournaments.php">Tournaments</a></li>
          <li role="presentation"><a href="teamMaker.php">Team Maker</a></li>
          <li role="presentation"><a href="counters.php">Counters</a></li>
          <li role="presentation"><a href="builds.php">Builds</a></li>          
          <li role="presentation"><a href="forum.php">Forum</a></li>
          <li role="presentation"><a href="contests.php">Contests</a></li>
          <li role="presentation"><a href="contactUs.php">Contact Us</a></li>

        </ul>
   </div>

  <div>
    <h1  id="policy"> Privacy Policy</h1>
    <hr>
    <p id="terms"> Strictly3s.com is preserved by web master Dino Panagos, all information collected is private and it is our word that it is protected to the best of our ability.  The policy may change on occasion so it is encouraged as a visitor to view this policy from time to time.</p>
    <ol>
       <li style = "font-weight: bold;">The extent of our Privacy Policy <span class="text-muted">This privacy policy is here to describe the information we collect from each individual accessing our site along with use of that information , and the use of cookies and other web services. <span></li>
      <li style = "font-weight: bold;">Data Collected. <span class="text-muted"> We may collect personal information such as name, email address, and date accessed when you choose to vist the Strictly3s website. However it may not be collected unless you choose to provide us with such.  We may also collect information provided by your web browser from occasion including : The browser used to access Strictly3s.com, which pages within our site you visit, and your Internet Protocol Address.</span></li>
       <li style = "font-weight: bold;">Newsletters and Emails <span class="text-muted">We may send emails and/or newsletters to our users using their personal information, who have agreed to receive emails. Users will always have the option to opt out of the newsletters.</span></li>
    <li style = "font-weight: bold;">Contact Information <span class="text-muted">If you choose to contact us, we may save your personal information and keep a record of your comments.</span></li>
       <li style = "font-weight: bold;">Children's Policy <span class="text-muted">If you are under the age of 18, only agree to send personal information with parental consent.</span></li>
         <li style = "font-weight: bold;">On Site Polling <span class="text-muted">From time to time there may be polls on site to help improve our site or get feedback from our viewers. Information given by each user is volunteered and may be saved for futher use. </span></li>
           <li style = "font-weight: bold;">Cookies <span class="text-muted">We use cookies to make the user experience as best as possible for the next time you return to our site. A cookie is a small piece of data stored on your web browser for further use. </span></li>
          <li style = "font-weight: bold;">Advertisement <span class="text-muted">We allow 3rd party advertisements on our web page, collect anonymous information when you visit our site. These companies typically use web beacons to aquire the information.</span></li>
           <li style = "font-weight: bold;">Protecting Personal Information <span class="text-muted"> Strictly3s.com along with our team will do our best to protect all of your personal information from unauthorized access, but do not guarantee it will never occur.</span></li>
           <li style = "font-weight: bold;">Policy Changes <span class="text-muted">Strictly3s has the right to change this policy statement at any time.</span></li>         
    </ol>

  </div>


<hr>
  <footer>
        <p class="pull-right"><a href="contactUs.php">Contact / Advertise </a>&middot;<a href="privacyPolicy.php"> Privacy</a> &middot;<a href="#"> Back to top</a></p>
        <p>&copy; Created by Web Designer Dino Panagos  &middot;</p>
      </footer>

    </div><!-- /.container -->


  
    
  </body>
</html>

