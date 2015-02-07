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
          <li role="presentation" class="active"><a href="home.php">Home</a></li>
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

      <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <img src="pictures/jax.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 id="homeHeader">Welcome to Strictly3s.com</h1>
              <p id="homeCaption">We aim to be the best quality Twisted Treeline website out there, bringing you fresh updated daily content and tips & tricks along the way.  Register to take advantage of our forums, win RP in our Tournaments, and find friends with our Team Maker!</p>

              <p><a class="btn btn-lg btn-primary" href="#" role="button">Register Now</a></p>
            </div>
          </div>
        </div>
        <div class="item">
           <img src="pictures/patchPicture.png" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 id="slide2header">Patch 4.19</h1>
              <p>
                 
                  <li>Champion Visuals & Ablities Update</li>
                  <li>Splash Icon Updates</li>
                  <li>End of Season Rewards</li>
                  <li>Store Improvements</li>
                 
              </p>
              <p><a class="btn btn-lg btn-success" target="_blank" href="http://na.leagueoflegends.com/en/news/game-updates/patch/patch-419-notes" role="button">Check out the Update</a></p>
            </div>
          </div>

        </div>
        <div class="item">
          <img src="pictures/kalista.png" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1 id="slide2header">Kalista : The Spear of Vengeance</h1>
              <p>Treacherously murdered, Kalista rose as a specter, twisted by the horrific power of the Shadow Isles. In death, she offers Runeterrans a proposition: surrender your soul to the Spear of Vengeance and she will exact retribution on your betrayers.</p>
              <p><a class="btn btn-lg btn-primary" href="http://na.leagueoflegends.com/en/champion-reveal/kalista-spear-vengeance-revealed" target="_blank" role="button">Check out the Newest Champ</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->

 <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">New Soraka Skin : <span class="text-muted">Reaper Soraka</span></h2>
          <p class="lead">Harvest the power of fallen souls with Reaper Soraka, available for 1350 RP (on sale for 975 RP through November 10 before going into the Legacy Vault on November 21.</p>
           <p><a class="btn btn-default" href="http://na.leagueoflegends.com/en/news/champions-skins/skin-release/tremble-reaper-soraka" target="_blank" role="button">Reaper Soraka</a></p>
        </div>
        <div class="col-md-5">
         <a href="http://na.leagueoflegends.com/en/news/champions-skins/skin-release/tremble-reaper-soraka" target="_blank"> <img class="featurette-image img-responsive" src="pictures/soraka.png" alt="Generic placeholder image"></a>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-5">
          <a href="http://www.twitch.tv/alaric_ventris/profile" target="_blank" ><img class="featurette-image img-responsive" src="pictures/twitch.png" alt="Generic placeholder image"></a>
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading">Featured 3v3 Streamer <span class="text-muted">Alaric_Ventris</span></h2>
          <p class="lead">Twisted Treeline Rank : Challenger I<br> Solo Queue Rank: Diamond V <br> Most Played Champions: Ziggs, Khazix, Lucian</p>
          <p><a class="btn btn-default" href="http://www.twitch.tv/alaric_ventris/profile" target="_blank" role="button">Alaric's Stream</a></p>
        </div>
      </div>

      <hr class="featurette-divider">

      <!-- /END THE FEATURETTES -->

    <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2>Top Champions</h2>
              <ol class="circles-list">
                 <li ><p id="champ3"><img src="icons/JarvanIVSquare.png"> Jarvan IV</p></li>
                 <li ><p id="champ3"><img src="icons/WukongSquare.png"> Wukong</p></li>
                 <li ><p id="champ3"><img src="icons/RivenSquare.png"> Riven</p></li>
              </ol>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Top Bans</h2>
              <ol class="circles-list">
                 <li ><p id="champ3"><img src="icons/YasuoSquare.png"> Yasuo</p></li>
                 <li ><p id="champ3"><img src="icons/MorganaSquare.png"> Morgana</p></li>
                 <li ><p id="champ3"><img src="icons/JarvanIVSquare.png"> Jarvan IV</p></li>
              </ol>
            </div><!--/.col-xs-6.col-lg-4-->
            <div class="col-xs-6 col-lg-4">
              <h2>Top Team Comp</h2>
              <ol class="circles-list">
                 <li ><p id="champ3"><img src="icons/MalphiteSquare.png"> Malphite</p></li>
                 <li ><p id="champ3"><img src="icons/YasuoSquare.png"> Yasuo</p></li>
                 <li ><p id="champ3"><img src="icons/WukongSquare.png"> Wukong</p></li>
              </ol>
            </div><!--/.col-xs-6.col-lg-4-->
    </div><!--/row-->
      
<hr>

  <footer>
        <p class="pull-right"><a href="contactUs.php">Contact / Advertise </a>&middot;<a href="privacyPolicy.php"> Privacy </a>&middot;<a href="#"> Back to top</a></p>
        <p>&copy; Created by Web Designer Dino Panagos  &middot;</p>
      </footer>

    </div><!-- /.container -->



  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
