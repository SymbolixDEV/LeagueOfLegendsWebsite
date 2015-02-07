<?php 

if(isset($_POST['submit'])){

 $x = $_POST['optradio'];
  $one = $_POST['p1'];
   $two = $_POST['p2'];
    $three = $_POST['p3'];
     $sub = $_POST['sub'];

if ((!$_POST['teamName']) || (!$_POST['p1']) || (!$_POST['p2']) || (!$_POST['p3']) || (!$_POST['optradio']) )
 {
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('You did not complete all of the required fields')
        window.location.href='tournaments.php'
        </SCRIPT>");
exit();
    } 


   

    if($x == "t1")
    {
        $tourn= "Strictly3s - New Years Tournament";
    }
    if($x == "t2")
    {
        $tourn = "Strictly3s - Holiday Tournament";
    }
    if($x == "t3")
    {
        $tourn = "Strictly3s - Greenbowl Tournament";
    }
    
   

    $to = "dp257@njit.edu"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $subject = "Tournament Entry";
    $tName = $_POST['teamName'];
      

if(isset($_POST['sub']))
{
     $message = "Team Name: ".$tName . " " ."want to enter: " . $tourn . " There players are " .$one. ", ".$two. ", ".$three. ",  with sub ".$sub." ";
  }
  else
  {
      $message = "Team Name: ".$tName . " " ."want to enter: " . $tourn . " There players are " .$one. " ,".$two. " ,".$three. " ";
  }
  
    $headers = "From:" . $from;
    
    mail($to,$subject,$message,$headers);
  
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sent')
        window.location.href='home.php'
        </SCRIPT>");


  }


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


#dates{
  font-family: allStar;
    font-size: 52px;
  font-weight: bold;

}



.img-with-text {
    text-align: justify;
    width: 60px;
}

.img-with-text img {
    display: block;
    margin: 0 auto;
}


#left{
  width: 45%;
float: left;
}
#right{
  width: 50%;
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
          <li role="presentation" class="active"><a href="tournaments.php">Tournaments</a></li>
          <li role="presentation"><a href="teamMaker.php">Team Maker</a></li>
          <li role="presentation"><a href="counters.php">Counters</a></li>
          <li role="presentation"><a href="builds.php">Builds</a></li>          
          <li role="presentation"><a href="forum.php">Forum</a></li>
          <li role="presentation"><a href="contests.php">Contests</a></li>
          <li role="presentation"><a href="contactUs.php">Contact Us</a></li>

        </ul>
   </div>

  
   <div class="row">
  
       <div class="col-md-6">
             <h1 id="dates">Tournament Dates</h1> 
         <ul>
          <li style = "font-weight: bold;">[NA] 3v3 New Years Tournament <span class="text-muted"> xx/xx/2015 Coming Soon!</span></li>
           <li style = "font-weight: bold;">[NA] 3v3 Holiday Tournament <span class="text-muted"> xx/xx/2015 Coming Soon!</span></li>
           <li style = "font-weight: bold;">[NA] 3v3 Greenbowl Tournament <span class="text-muted"> xx/xx/2015 Coming Soon!</span></li>
        </ul>

    <h2>Register Team</h2>
     <form role="form" action="" method="post" id="form">

        <div class="form-group">
          <label for="usr">Team Name :</label>
          <input type="text" class="form-control" name ="teamName" id="teamName">
        </div>

        <div class="form-group">
          <label for="usr">Player 1 IGN:</label>
          <input type="text" class="form-control" name ="p1" id="p1">
        </div>

        <div class="form-group">
          <label for="usr">Player 2 IGN:</label>
          <input type="text" class="form-control" name ="p2" id="p2">
        </div>

        <div class="form-group">
          <label for="usr">Player 3 IGN:</label>
          <input type="text" class="form-control" name ="p3" id="p3">
        </div>

        <div class="form-group">
          <label for="usr">Subsitute IGN:</label>
          <input type="text" class="form-control" name ="sub" id="sub">
        </div>

        <div class="form-group">
          <label for="usr">Team Email:</label>
          <input type="email" class="form-control" name ="email" id="email">
        </div>

     <label for="radio">Tournament:</label>

         <div class="radio">
            <label><input type="radio" name="optradio" id="t1" value='t1' >New Years Tournament </label>           
        </div>
        <div class="radio">
            <label><input type="radio" name="optradio" id="t2" value='t2' >Holiday Tournament</label>           
        </div>
        <div class="radio">
            <label><input type="radio" name="optradio" id="t3" value='t3' >Greenbowl Tournament </label>           
        </div>

        <br>

        <button type="submit" name="submit" value="submit" class="btn btn-info" >Submit</button>
     </form>
   </div>

       <div class="col-md-6">
               <img src="pictures/tournament.png" style= "margin-top:10px;">
                <img src="http://placehold.it/500x450&text=Advertise+Here!" style="margin-left:40px; margin-right:40px; margin-top:20px; ">
     
       </div>


  </div>

  <hr>
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

