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

ol.circles-list {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
     
    margin: 0;
    margin-left: 4em;
    padding: 0;
     
    counter-reset: li-counter;
}
ol.circles-list > li{
    position: relative;
    padding-left: 0.5em;
    min-height: 3em;
}
ol.circles-list > li:before {
    position: absolute;
    top: 0;
    left: -1.33em;
    width: 1.3em;
    height: 1.3em;
     
    font-size: 2.5em;
    line-height: 1.2;
    text-align: center;
    color: #f5f5f5;
 
    border: 3px solid #c5c5c5;
    border-radius: 50%;
    background-color: #464646;
    content: counter(li-counter);
    counter-increment: li-counter;
}


#tierFont{
    font-size: 12px;
  font-weight: bold;

}

#tierGod{
    
}

.img-with-text {
    text-align: justify;
    width: 60px;
}

.img-with-text img {
    display: block;
    margin: 0 auto;
}

li{
  list-style-type: none;
  display: inline;
  float: left;
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
   
    <script src="js/ie-emulation-modes-warning.js"></script>

   
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
          <li role="presentation" ><a href="tournaments.php">Tournaments</a></li>
          <li role="presentation"><a href="teamMaker.php">Team Maker</a></li>
          <li role="presentation"><a href="counters.php">Counters</a></li>
          <li role="presentation"><a href="builds.php">Builds</a></li>          
          <li role="presentation" class="active"><a href="forum.php">Forum</a></li>
          <li role="presentation"><a href="contests.php">Contests</a></li>
          <li role="presentation"><a href="contactUs.php">Contact Us</a></li>

        </ul>
   </div>

  
   



 
      

<br><br><br><br>
  <footer>
        <p class="pull-right"><a href="contactUs.php">Contact / Advertise </a>&middot;<a href="privacyPolicy.php"> Privacy</a> &middot;<a href="#"> Back to top</a></p>
        <p>&copy; Created by Web Designer Dino Panagos  &middot;</p>
      </footer>

    </div><!-- /.container -->



  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

