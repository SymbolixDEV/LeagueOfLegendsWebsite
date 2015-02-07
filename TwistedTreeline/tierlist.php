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
           <li role="presentation"><a href="home.php">Home</a></li>
          <li role="presentation" class="active"><a href="tierlist.php">TierList</a></li>
          <li role="presentation"><a href="tournaments.php">Tournaments</a></li>
          <li role="presentation"><a href="teamMaker.php">Team Maker</a></li>
          <li role="presentation"><a href="counters.php">Counters</a></li>
          <li role="presentation"><a href="builds.php">Builds</a></li>          
          <li role="presentation"><a href="forum.php">Forum</a></li>
          <li role="presentation"><a href="contests.php">Contests</a></li>
          <li role="presentation"><a href="contactUs.php">Contact Us</a></li>

        </ul>
   </div>

   <div id="tierGo">
   		<h1>Tier God<h1>
   	<ul>
   	<li><div>	<img src="tinyIcons/JarvanIVSquare.png" style="margin-right:20px;"> <div id="tierFont"> Jarvan IV</div> </div></li>
   	<li><div> <img src="tinyIcons/MaokaiSquare.png" style="margin-right:20px;"><div id="tierFont"> Maokai </div> </div></li>
  	<li><div>	<img src="tinyIcons/MorganaSquare.png" style="margin-right:20px;"> <div id="tierFont"> Morgana </div> </div></li>
   	<li><div>	<img src="tinyIcons/WukongSquare.png" style="margin-right:20px;"> <div id="tierFont"> Wukong </div> </div></li>
   	<li><div>	<img src="tinyIcons/YasuoSquare.png" style="margin-right:20px;"><div id="tierFont"> Yasuo </div> </div></li>
   </ul>	 
   </div><br><br><br><br><hr>


  <div id="tier1">
  	 <h1>Tier 1<h1>
      <ul>
  	 <li><div>	<img src="tinyIcons/AhriSquare.png" style="margin-right:20px;"><div id="tierFont">Ahri</div> </div></li>
   		<li><div><img src="tinyIcons/BraumSquare.png" style="margin-right:20px;"><div id="tierFont"> Braum</div> </div></li>
   	<li><div>	<img src="tinyIcons/CorkiSquare.png" style="margin-right:20px;"><div id="tierFont"> Corki</div> </div></li>
   	<li><div>	<img src="tinyIcons/DariusSquare.png" style="margin-right:20px;"><div id="tierFont"> Darius</div> </div></li>
   		<li><div><img src="tinyIcons/GnarSquare.png" style="margin-right:20px;"><div id="tierFont"> Gnar</div> </div></li>
   	<li><div>	<img src="tinyIcons/JayceSquare.png" style="margin-right:20px;"><div id="tierFont"> Jayce</div> </div></li>
   	<li><div>	<img src="tinyIcons/KarmaSquare.png" style="margin-right:20px;"><div id="tierFont"> Karma</div> </div></li>
   <li><div>	<img src="tinyIcons/KhaZixSquare.png" style="margin-right:20px;"><div id="tierFont"> KhaZix</div> </div></li>
   <li><div>	<img src="tinyIcons/LeeSinSquare.png" style="margin-right:20px;"><div id="tierFont"> LeeSin</div> </div></li>
  <li><div> <img src="tinyIcons/LeonaSquare.png" style="margin-right:20px;"><div id="tierFont"> Leona</div> </div></li>
  <li><div> <img src="tinyIcons/LissandraSquare.png" style="margin-right:20px;"><div id="tierFont"> Lissandra</div> </div></li>
  <li><div> <img src="tinyIcons/LucianSquare.png" style="margin-right:20px;"><div id="tierFont"> Lucian</div> </div></li>  
   <li><div><img src="tinyIcons/LuluSquare.png" style="margin-right:20px;"> <div id="tierFont"> Lulu</div> </div></li> 
   	<li><div>	<img src="tinyIcons/OriannaSquare.png" style="margin-right:20px;"><div id="tierFont"> Orianna</div> </div></li>
   	<li><div>	<img src="tinyIcons/RivenSquare.png" style="margin-right:20px;"><div id="tierFont"> Riven</div> </div></li>  <br><br>
   	<li><div>	<img src="tinyIcons/SyndraSquare.png" style="margin-right:20px;"><div id="tierFont"> Syndra</div> </div></li>
   	<li><div>	<img src="tinyIcons/XinZhaoSquare.png" style="margin-right:20px;"><div id="tierFont"> Xin Zhao</div> </div></li>
   	<li><div>	<img src="tinyIcons/ZiggsSquare.png" style="margin-right:20px;"><div id="tierFont"> Ziggs</div> </div></li>
   <li><div> <img src="tinyIcons/ZyraSquare.png" style="margin-right:20px;"><div id="tierFont"> Zyra</div> </div></li>
      </ul>
   </div><br><br><br><br><hr>

     <div id="tier2">
  	 <h1>Tier 2<h1>
      <ul>
  	 	<li><div><img src="tinyIcons/AatroxSquare.png" style="margin-right:20px;"><div id="tierFont">Aatrox</div> </div></li>
   		<li><div><img src="tinyIcons/AmumuSquare.png" style="margin-right:20px;"><div id="tierFont">Amumu</div> </div></li>
   		<li><div><img src="tinyIcons/AniviaSquare.png" style="margin-right:20px;"><div id="tierFont">Anivia</div> </div></li>
   		<li><div><img src="tinyIcons/AzirSquare.png" style="margin-right:20px;"><div id="tierFont">Azir</div> </div></li>
   		<li><div><img src="tinyIcons/BrandSquare.png" style="margin-right:20px;"><div id="tierFont">Brand</div> </div></li>
   		<li><div><img src="tinyIcons/ChoGathSquare.png" style="margin-right:20px;"><div id="tierFont">Chogath</div> </div></li>
   		<li><div><img src="tinyIcons/FizzSquare.png" style="margin-right:20px;"><div id="tierFont">Fizz</div> </div></li>
   		<li><div><img src="tinyIcons/GarenSquare.png" style="margin-right:20px;"><div id="tierFont">Garen</div> </div></li>
   		<li><div><img src="tinyIcons/GravesSquare.png" style="margin-right:20px;"><div id="tierFont">Graves</div> </div></li>
   		<li><div><img src="tinyIcons/IreliaSquare.png" style="margin-right:20px;"><div id="tierFont">Irelia</div> </div></li>
   		<li><div><img src="tinyIcons/JaxSquare.png" style="margin-right:20px;"><div id="tierFont">Jax</div> </div></li>
   		<li><div><img src="tinyIcons/KayleSquare.png" style="margin-right:20px;"><div id="tierFont">Kayle</div> </div></li>
   		<li><div><img src="tinyIcons/MalphiteSquare.png" style="margin-right:20px;"><div id="tierFont"> Malphite</div> </div></li>
   		<li><div><img src="tinyIcons/MordekaiserSquare.png" style="margin-right:20px;"><div id="tierFont">Mordekaiser</div> </div></li>
   		<li><div><img src="tinyIcons/NunuSquare.png" style="margin-right:20px;"><div id="tierFont">Nunu</div> </div></li>  <br><br>
   		<li><div><img src="tinyIcons/OlafSquare.png" style="margin-right:20px;"><div id="tierFont">Olaf</div> </div></li>
   		<li><div><img src="tinyIcons/PantheonSquare.png" style="margin-right:20px;"><div id="tierFont">Pantheon</div> </div></li>
   		<li><div><img src="tinyIcons/RenektonSquare.png" style="margin-right:20px;"><div id="tierFont">Renekton</div> </div></li>
   		<li><div><img src="tinyIcons/RengarSquare.png" style="margin-right:20px;"><div id="tierFont">Rengar</div> </div></li>
   		<li><div><img src="tinyIcons/RumbleSquare.png" style="margin-right:20px;"><div id="tierFont">Rumble</div> </div></li>
   		<li><div><img src="tinyIcons/RyzeSquare.png" style="margin-right:20px;"><div id="tierFont">Ryze</div> </div></li>
   		<li><div><img src="tinyIcons/TrundleSquare.png" style="margin-right:20px;"><div id="tierFont">Trundle</div> </div></li>
   		<li><div><img src="tinyIcons/UdyrSquare.png" style="margin-right:20px;"><div id="tierFont">Udyr</div> </div></li>
   		<li><div><img src="tinyIcons/VelKozSquare.png" style="margin-right:20px;"><div id="tierFont">Velkoz</div> </div></li>
   		<li><div><img src="tinyIcons/ViSquare.png" style="margin-right:20px;"><div id="tierFont">Vi</div> </div></li>
   		<li><div><img src="tinyIcons/WarwickSquare.png" style="margin-right:20px;"> <div id="tierFont"> Warwick</div> </div></li>
      </ul>	
   </div><br><br><br><br><hr>

     <div id="tier3">
  	 <h1>Tier 3<h1>
      <ul>
  	 	<li><div><img src="tinyIcons/AlistarSquare.png" style="margin-right:20px;"><div id="tierFont">Alistar</div> </div></li>
   		<li><div><img src="tinyIcons/AnnieSquare.png" style="margin-right:20px;"><div id="tierFont">Annie</div> </div></li>
   		<li><div><img src="tinyIcons/DianaSquare.png" style="margin-right:20px;"><div id="tierFont">Diana</div> </div></li>
   		<li><div><img src="tinyIcons/EliseSquare.png" style="margin-right:20px;"><div id="tierFont">Elise</div> </div></li>
   		<li><div><img src="tinyIcons/EvelynnSquare.png" style="margin-right:20px;"><div id="tierFont">Evelynn</div> </div></li>
   		<li><div><img src="tinyIcons/FiddlesticksSquare.png" style="margin-right:20px;"><div id="tierFont">Fiddlesticks</div> </div></li>
   		<li><div><img src="tinyIcons/FioraSquare.png" style="margin-right:20px;"><div id="tierFont">Fiora</div> </div></li>
   		<li><div><img src="tinyIcons/GalioSquare.png" style="margin-right:20px;"><div id="tierFont">Galio</div> </div></li>
   		<li><div><img src="tinyIcons/GragasSquare.png" style="margin-right:20px;"><div id="tierFont">Gragas</div> </div></li>
   		<li><div><img src="tinyIcons/KatarinaSquare.png" style="margin-right:20px;"><div id="tierFont">Katarina</div> </div></li>
   		<li><div><img src="tinyIcons/MalzaharSquare.png" style="margin-right:20px;"><div id="tierFont">Malzahar</div> </div></li>
   		<li><div><img src="tinyIcons/NidaleeSquare.png" style="margin-right:20px;"><div id="tierFont">Nidalee</div> </div></li>
   		<li><div><img src="tinyIcons/NocturneSquare.png" style="margin-right:20px;"><div id="tierFont">Nocturne</div> </div></li><br><br>
   		<li><div><img src="tinyIcons/PoppySquare.png" style="margin-right:20px;"><div id="tierFont">Poppy</div> </div></li>
   		<li><div><img src="tinyIcons/RammusSquare.png" style="margin-right:20px;"><div id="tierFont">Rammus</div> </div></li>
   		<li><div><img src="tinyIcons/SejuaniSquare.png" style="margin-right:20px;"><div id="tierFont">Sejuani</div> </div></li>
   		<li><div><img src="tinyIcons/ShacoSquare.png" style="margin-right:20px;"><div id="tierFont">Shaco</div> </div></li>
   		<li><div><img src="tinyIcons/ShyvanaSquare.png" style="margin-right:20px;"><div id="tierFont">Shyvana</div> </div></li>
   		<li><div><img src="tinyIcons/SionSquare.png" style="margin-right:20px;"><div id="tierFont">Sion</div> </div></li>
   		<li><div><img src="tinyIcons/SonaSquare.png" style="margin-right:20px;"><div id="tierFont">Sona</div> </div></li>
   		<li><div><img src="tinyIcons/SwainSquare.png" style="margin-right:20px;"><div id="tierFont">Swain</div> </div></li>
   		<li><div><img src="tinyIcons/TalonSquare.png" style="margin-right:20px;"><div id="tierFont">Talon</div> </div></li>
   		<li><div><img src="tinyIcons/TryndamereSquare.png" style="margin-right:20px;"><div id="tierFont">Tryndamere</div> </div></li>
   		<li><div><img src="tinyIcons/UrgotSquare.png" style="margin-right:20px;"><div id="tierFont">Urgot</div> </div></li>
   		<li><div><img src="tinyIcons/VayneSquare.png" style="margin-right:20px;"><div id="tierFont">Vayne</div> </div></li>
   		<li><div><img src="tinyIcons/VolibearSquare.png" style="margin-right:20px;"><div id="tierFont">Volibear</div> </div></li><br><br>
   		<li><div><img src="tinyIcons/XerathSquare.png" style="margin-right:20px;"><div id="tierFont">Xerath</div> </div></li>
   		<li><div><img src="tinyIcons/ZacSquare.png" style="margin-right:20px;"><div id="tierFont">Zac</div> </div></li>
   		</ul>
   </div><br><br><br><br><hr>

     <div id="tier4">
  	 <h1>Tier 4<h1>
      <ul>
  	 	<li><div><img src="tinyIcons/AkaliSquare.png" style="margin-right:20px;"><div id="tierFont">Akali</div> </div></li>
   		<li><div><img src="tinyIcons/BlitzcrankSquare.png" style="margin-right:20px;"><div id="tierFont">Blitzcrank</div> </div></li>
   		<li><div><img src="tinyIcons/CaitlynSquare.png" style="margin-right:20px;"><div id="tierFont">Caitlyn</div> </div></li>
   		<li><div><img src="tinyIcons/CassiopeiaSquare.png" style="margin-right:20px;"><div id="tierFont">Cassiopeia</div> </div></li>
   		<li><div><img src="tinyIcons/DravenSquare.png" style="margin-right:20px;"><div id="tierFont">Draven</div> </div></li>
   		<li><div><img src="tinyIcons/DrMundoSquare.png" style="margin-right:20px;"><div id="tierFont">Dr. Mundo</div> </div></li>
   		<li><div><img src="tinyIcons/EzrealSquare.png" style="margin-right:20px;"><div id="tierFont">Ezreal</div> </div></li>
   		<li><div><img src="tinyIcons/GangplankSquare.png" style="margin-right:20px;"><div id="tierFont">Gangplank</div> </div></li>
   		<li><div><img src="tinyIcons/HecarimSquare.png" style="margin-right:20px;"><div id="tierFont">Hecarim</div> </div></li>
   		<li><div><img src="tinyIcons/HeimerdingerSquare.png" style="margin-right:20px;"><div id="tierFont">Heimdinger</div> </div></li>
   		<li><div><img src="tinyIcons/JannaSquare.png" style="margin-right:20px;"><div id="tierFont">Janna</div> </div></li>
   		<li><div><img src="tinyIcons/JinxSquare.png" style="margin-right:20px;"><div id="tierFont">Jinx</div> </div></li>
   		<li><div><img src="tinyIcons/KarthusSquare.png" style="margin-right:20px;"><div id="tierFont">Karthus</div> </div></li><br><br>
   		<li><div><img src="tinyIcons/KassadinSquare.png" style="margin-right:20px;"><div id="tierFont">Kassadin</div> </div></li>
   		<li><div><img src="tinyIcons/KennenSquare.png" style="margin-right:20px;"><div id="tierFont">Kennen</div> </div></li>
   		<li><div><img src="tinyIcons/LeBlancSquare.png" style="margin-right:20px;"><div id="tierFont">LeBlanc</div> </div></li>
   		<li><div><img src="tinyIcons/LuxSquare.png" style="margin-right:20px;"><div id="tierFont">Lux</div> </div></li>
   		<li><div><img src="tinyIcons/MasterYiSquare.png" style="margin-right:20px;"><div id="tierFont">Master Yi</div> </div></li>
   		<li><div><img src="tinyIcons/NasusSquare.png" style="margin-right:20px;"><div id="tierFont">Nasus</div> </div></li>
   		<li><div><img src="tinyIcons/QuinnSquare.png" style="margin-right:20px;"><div id="tierFont">Quinn</div> </div></li>
   		<li><div><img src="tinyIcons/ShenSquare.png" style="margin-right:20px;"><div id="tierFont">Shen</div> </div></li>
   		<li><div><img src="tinyIcons/SkarnerSquare.png" style="margin-right:20px;"><div id="tierFont">Skarner</div> </div></li>
   		<li><div><img src="tinyIcons/TaricSquare.png" style="margin-right:20px;"><div id="tierFont">Taric</div> </div></li>
   		<li><div><img src="tinyIcons/TeemoSquare.png" style="margin-right:20px;"><div id="tierFont">Teemo</div> </div></li>
   		<li><div><img src="tinyIcons/ThreshSquare.png" style="margin-right:20px;"><div id="tierFont">Thresh</div> </div></li>
   	  <li><div>	<img src="tinyIcons/TristanaSquare.png" style="margin-right:20px;"> <div id="tierFont">Tristana</div> </div></li><br><br>
   		<li><div><img src="tinyIcons/VarusSquare.png" style="margin-right:20px;"><div id="tierFont">Varus</div> </div></li>
   		<li><div> <img src="tinyIcons/ViktorSquare.png" style="margin-right:20px;"><div id="tierFont">Viktor</div> </div></li>
   		<li><div><img src="tinyIcons/VladimirSquare.png" style="margin-right:20px;"><div id="tierFont">Vladimir</div> </div></li>
   		<li><div><img src="tinyIcons/YorickSquare.png" style="margin-right:20px;"><div id="tierFont">Yorick</div> </div></li>
   		<li><div><img src="tinyIcons/ZedSquare.png" style="margin-right:20px;"><div id="tierFont">Zed</div> </div></li>
   		<li><div><img src="tinyIcons/ZileanSquare.png" style="margin-right:20px;"><div id="tierFont">Zilean</div> </div></li>
      <ul>
   
   </div><br><br><br><br><hr>

      <div id="tier5">
  	 <h1>Tier 5<h1>
      <ul>
  	 	 <li><div><img src="tinyIcons/AsheSquare.png" style="margin-right:20px;"><div id="tierFont">Ashe</div> </div></li>
   		<li><div><img src="tinyIcons/KogMawSquare.png" style="margin-right:20px;"><div id="tierFont">Kogmaw</div> </div></li>
   		<li><div><img src="tinyIcons/MissFortuneSquare.png" style="margin-right:20px;"><div id="tierFont">Miss Fortune</div> </div></li>
   		<li><div><img src="tinyIcons/NamiSquare.png" style="margin-right:20px;"><div id="tierFont">Nami</div> </div></li>
   		<li><div><img src="tinyIcons/NautilusSquare.png" style="margin-right:20px;"><div id="tierFont">Nautilus</div> </div></li>
   		<li><div><img src="tinyIcons/SivirSquare.png" style="margin-right:20px;"><div id="tierFont">Sivir</div> </div></li>
   	<li><div>	<img src="tinyIcons/SorakaSquare.png" style="margin-right:20px;"><div id="tierFont">Soraka</div> </div></li>
   		<li><div><img src="tinyIcons/TwistedFateSquare.png" style="margin-right:20px;"><div id="tierFont">Twisted Fate</div> </div></li>
   		<li><div><img src="tinyIcons/TwitchSquare.png" style="margin-right:20px;"><div id="tierFont">Twitch</div> </div></li>
   	<li><div>	<img src="tinyIcons/VeigarSquare.png" style="margin-right:20px;"><div id="tierFont">Veigar</div> </div></li>
    </ul>
   </div><br><br><br><br><hr>
  
   



 
      


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
