<?php 
$Anime_name=$_POST['Anime_name'];
include 'connection.php';
$sql="select * from anime where Anime_name='$Anime_name';";
$result=mysqli_query($con,$sql);
$recount=0;
while($row=mysqli_fetch_array($result)){
$recount=$recount+1;
$Anime_name=$row['Anime_name'];
$Anime_imagefile_name=$row['Anime_imagefile_name'];
$Anime_review=$row['Anime_review'];
$Anime_release_date=$row['Anime_release_date'];
$Anime_ratings=$row['Anime_ratings'];
$Anime_genres=unserialize($row['Anime_genres']);
$Anime_duration=$row['Anime_duration'];
$Anime_type=$row['Anime_type'];
$Anime_quality=$row['Anime_quality'];
$Studio_name=$row['Studio_name'];
$Anime_release_year=$row['Anime_release_year'];
$Anime_status=$row['Anime_status'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo"<title> $Anime_name </title>";?>
    <link rel="icon" href="image/logo.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style2.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"rel="stylesheet">
    <script src="https://use.fontawesome.com/f05d6f6c32.js"></script>
</head>
<body>
    <div class="nav">
    <div class="nav-h" id="myDIV1">
        <div class="menu-content">
            <div class="button-home">
            <div class="menu-button" onclick="myFunction1()"><i class="fa fa-angle-left fa-1x" aria-hidden="true"></i>Close menu</div>
            <a href="index.php" class="home"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
            <div class="drop-down" id="myDIV2">
                <a href="all-shows.php" class="heading" onclick="myFunction2()"><i class="fa fa-angle-right" id="angle1" aria-hidden="true"></i>All Shows</a>
            </div>
            <div class="drop-down" id="myDIV3">
                <div class="heading" onclick="myFunction3()"><i class="fa fa-angle-right" id="angle2" aria-hidden="true"></i>Type</div>
                <div class="content"><a href="movies.php" class="a">Movie</a><a href="TV-series.php" class="b">TV series</a></div>
                <div class="content"><a href="ovas.php" class="c">OVAs</a><a href="onas.php" class="d">ONAs</a></div>
                <div class="content"><a href="specials.php" class="e">Specials</a><a href="music.php" class="f">Music</a></div>
            </div>
            <div class="drop-down" id="myDIV4">
                <div class="heading" onclick="myFunction4()"><i class="fa fa-angle-right" id="angle3" aria-hidden="true"></i>Status</div>
                <div class="content"><a href="completed.php" class="a">Completed</a><a href="airing.php" class="b">Airing</a></div>
            </div>
            <div class="drop-down" id="myDIV5">
                <div class="heading" onclick="myFunction5()"><i class="fa fa-angle-right" id="angle4" aria-hidden="true"></i>Language</div>
                <div class="content"><a href="subbed.php" class="a">Subbed</a><a href="dubbed.php" class="b">Dubbed</a></div>
            </div>
            <div class="drop-down" id="myDIV6">
                <div class="heading" onclick="myFunction6()"><i class="fa fa-angle-right" id="angle5" aria-hidden="true"></i>Top Anime</div>
                <div class="content"><a href="top-airing.php" class="a">Top Airing</a><a href="top-favorited.php" class="b">Top Favorited</a></div>
                <div class="content"><a href="top-movies.php" class="c">Top Movies</a><a href="top-2023.php" class="d">Top 2023</a></div>
                <div class="content"><a href="most-popular.php" class="e">Most Popular</a><a href="#" class="f"></a></div>
            </div>
            <div class="drop-down" id="myDIV7">
                <div class="heading" onclick="myFunction7()"><i class="fa fa-angle-right" id="angle6" aria-hidden="true"></i>Genre</div>
                <div class="content"><a href="action.php" class="a">Action</a><a href="adventure.php" class="b">Adventure</a></div>
                <div class="content"><a href="comedy.php" class="c">Comedy</a><a href="demons.php" class="d">Demons</a></div>
                <div class="content"><a href="drama.php" class="e">Drama</a><a href="game.php" class="f">Game</a></div>
                <div class="content"><a href="fantasy.php" class="g">Fantasy</a><a href="ecchi.php" class="h">Ecchi</a></div>
                <div class="content"><a href="ninja.php" class="i">Ninja</a><a href="drama.php" class="j">Drama</a></div>
            </div>
            <div class="drop-down" id="myDIV8">
                <div class="heading" onclick="myFunction8()"><i class="fa fa-angle-right" id="angle7" aria-hidden="true"></i>Release</div>
                <div class="content"><a href="2023.php" class="a">2023</a><a href="2022.php" class="b">2022</a></div>
                <div class="content"><a href="2021.php" class="c">2021</a><a href="2020.php" class="d">2020</a></div>
                <div class="content"><a href="2019.php" class="e">2019</a><a href="2018.php" class="f">2018</a></div>
                <div class="content"><a href="2017.php" class="g">2017</a><a href="2016.php" class="h">2016</a></div>
                <div class="content"><a href="2015.php" class="i">2015</a><a href="2014.php" class="j">2014</a></div>
            </div>
        </div>
    </div>
    <div class="nav-v">
        <div class="nav-left">
        <div class="menu" onclick="myFunction1()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="icon">
            <img src="image/logo.svg" alt="">
        </div>
        <div class="search">
            <input type="text" name="" id="" placeholder="Search anime...">
            <div class="search-icon">
            <i class="fa fa-search fa-1x " aria-hidden="true"></i>
            </div>
        </div>
        <a href="random.php" class="random">
            <i class="fa fa-random fa-1x" aria-hidden="true" ></i>
            Random
        </a>
        <a href="all-shows.php" class="animes">
            <i class="fa fa-film fa-1x" aria-hidden="true"></i>
            All Anime
        </a>
        </div>
        <div class="nav-reight">
            <i class="fa fa-ban" aria-hidden="true" style="color: #00ff95;"></i>
        </div>
    </div>
    </div>
    <div class="divider-55-trans"></div>
    <?php
    if($Anime_type=="TV series"){
    $Anime_seasons_filePath="videos/$Anime_name/";
    $Anime_seasons_file=glob($Anime_seasons_filePath.'*');
    $Anime_seasons_count=0;
    if($Anime_seasons_file!=false){
        $Anime_seasons_count=count($Anime_seasons_file);
    }
    $count=1;
    for($i=0;$i<$Anime_seasons_count;$i++)
    {
        $Seasons_episodes_filePath="videos/$Anime_name/season$count/season$count"."_1080p/";
        $Seasons_episodes_file=glob($Seasons_episodes_filePath.'*');
        if($Seasons_episodes_file!=false){
            $Seasons_episodes_count[$i]=count($Seasons_episodes_file);
        } 
        $count=$count+1;
    }
        $Seasons_count=1;
    echo"
    <div class='playlist'>
    <div class='container' style='width:70%';>
      <div class='video_player'>
        <video preload='metadata' class='main-video' id='videoPlayer'>
          <source src='videos/$Anime_name/season1/season1_480p/ep1.mp4' size='480' type='video/mp4' id='source480p'>
          <source src='videos/$Anime_name/season1/season1_720p/ep1.mp4' size='720' type='video/mp4' id='source720p'>
          <source src='videos/$Anime_name/season1/season1_1080p/ep1.mp4' size='1080' type='video/mp4' id='source1080p'>
          <track label='English' kind='subtitles' src='videos/$Anime_name/season1/english_subtitls/ep1.vtt' srclang='en' id='subenglish'>
          <track label='Tamil' kind='subtitles' src='videos/$Anime_name/season1/tamil_subtitls/ep1.vtt' srclang='en' id='subtamil'>
        </video>
      </div>
    </div>
    <div class='list-of-play'>
         <div class='list-innercontainer'>
         <div id='lic'>
         <div class='seasons'>";
         if($Anime_seasons_count==0){
            echo"<div class='sorry'><div class='sorry-container'>i really sorry, i will uploade <div class='color'>$Anime_name</div> anime soon.</div></div>";
        }
         else{
         foreach($Seasons_episodes_count as $Noepisodes){
            echo"<div class='season-no'>
            <div class='season-name'><div class='name'>Season $Seasons_count</div>
            <div class='up-down'>
            <div class='up'><i class='fa fa-caret-up' aria-hidden='true'></i></div>
            <div class='down'><i class='fa fa-caret-down' aria-hidden='true'></i></div>
            </div>
            </div>
            <div class='total-ep-outer'><div>
            <div class='total-ep' id='playlist-s-e'>";
            for($j=1;$j<=$Noepisodes;$j++)
            {
                echo"<li ";?>onclick="this.style.color='#00ff95'"<?php echo" class='episodes' data-video-480p='videos/$Anime_name/season$Seasons_count/season$Seasons_count";echo"_480p/ep$j.mp4' data-video-720p='videos/$Anime_name/season$Seasons_count/season$Seasons_count";echo"_720p/ep$j.mp4' data-video-1080p='videos/$Anime_name/season$Seasons_count/season$Seasons_count";echo"_1080p/ep$j.mp4' data-current='Your watching seasones $Seasons_count episode $j'>
                ep $j
                </li>";
            }
            $Seasons_count++;
            echo "</div></div></div></div>";
        }
    }
    echo "
    </div>                                                              
    <div class='button-l-r'>
    <div class='button-l' id='button-l'>Previous</div>
    <div class='button-r' id='button-r'>Next</div>
    </div>
    </div>
    </div>
    </div>
    </div>
    ";}
    else{
       echo"
       <div class='playlist'>
            <div class='container' style='width:98%';>
              <div class='video_player'>
                <video preload='metadata' class='main-video'>
                  <source src='videos/$Anime_name/$Anime_type/movie_480p/$Anime_name.mp4' size='480' type='video/mp4'>
                  <source src='videos/$Anime_name/$Anime_type/movie_720p/$Anime_name.mp4' size='720' type='video/mp4'>
                  <source src='videos/$Anime_name/$Anime_type/movie_1080p/$Anime_name.mp4' size='1080' type='video/mp4'>
                  <track label='English' kind='subtitles' src='videos/$Anime_name/$Anime_type/english_subtitls/$Anime_name.vtt' srclang='en'>
                  <track label='Tamil' kind='subtitles' src='videos/$Anime_name/$Anime_type/tamil_subtitls/$Anime_name.vtt' srclang='en'>
                </video>
              </div>
            </div>
       </div>
       "; 
    }
    ?>
    <?php
    echo"
    <div class='current-anime'>
    <div class='inner-current-anime-div'>
    <div class='inner-current-anime-anime_card'><img src='image/$Anime_name.jpg'></div>
    <div class='inner-current-anime-content'>
    <div class='anime-name-and-currenr'>
    <div class='anime-name ca'>$Anime_name</div>";
    if($Anime_type=="TV series" and $Anime_seasons_count!=0)
    { 
      echo "<div class='currentse' id='current-sences'>Your watching seasones 1 episode 1</div>";
    }
    echo "</div>
    <div class='anime-info mar-20'>
            <div class='series'><i class='fa fa-play-circle' aria-hidden='true'></i>$Anime_type</div>
            <div class='duration'><i class='fa fa-clock-o' aria-hidden='true'></i>$Anime_duration min</div>
            <div class='date'><i class='fa fa-calendar-o' aria-hidden='true'></i>$Anime_release_date</div>
            <div class='hd'>$Anime_quality</div>
    </div>
    <div class='anime-review-contents'>$Anime_review</div>
    </div>
    </div>
    </div>
    ";
     
    ?>
    <div class="recent-uploaded-and-topics">
                 <div class="recent-uploaded">
                 <h4>Recommended for you</h4>
                 <?php
                 include 'connection.php';
                 $sql="select * from anime;";
                 $result=mysqli_query($con,$sql);
                 $recount=0;
                 while($row=mysqli_fetch_array($result)){
                 $recount=$recount+1;
                 $Anime_name=$row['Anime_name'];
                 $Anime_imagefile_name=$row['Anime_imagefile_name'];
                 echo"<form action='anime-review.php' method='post'>
                 <input class='hide' type='text' value='$Anime_name' name='Anime_name'>
                 <button class='button-design bottom'>
                 <div class='anime-poster'><img src='image/$Anime_imagefile_name'></div>
                 <div class='anime-tittle'><div>#$recount $Anime_name</div></div>
                 </button>
                 </form>";
                 }               
                 ?>
                 </div>
                 <div class="topics">
                    <div class="topics-no-01">
                        <h4>Genres</h4>
                        <div class="container-01">
                            <div class="outer">
                        <div class="content"><a href="action.php" class="a">Action</a><a href="adventure.php" class="b">Adventure</a><a href="comedy.php" class="c">Comedy</a></div>
                        <div class="content"><a href="demons.php" class="d">Demons</a><a href="drama.php" class="e">Drama</a><a href="game.php" class="f">Game</a></div>
                        <div class="content"><a href="fantasy.php" class="g">Fantasy</a><a href="ecchi.php" class="h">Ecchi</a><a href="ninja.php" class="i">Ninja</a></div>
                        <div class="content"><a href="drama.php" class="j">Drama</a><a href="completed.php" class="a">Completed</a><a href="airing.php" class="b">Airing</a></div>
                        <div class="content"><a href="top-airing.php" class="a">Top Airing</a><a href="top-favorited.php" class="b">Favorited</a><a href="#" class="z"></a></div>
                        </div>
                        </div>
                    </div>
                    <div class="topics-no-02">
                    <h4>Top Anime By Years</h4>
                        <div class="container-01">
                            <div class="outer">
                            <div class="content"><a href="2023.php" class="a">2023</a><a href="2022.php" class="b">2022</a><a href="2021.php" class="c">2021</a></div>
                            <div class="content"><a href="2020.php" class="d">2020</a><a href="2019.php" class="e">2019</a><a href="2018.php" class="f">2018</a></div>
                            <div class="content"><a href="2017.php" class="g">2017</a><a href="2016.php" class="h">2016</a><a href="2015.php" class="i">2015</a></div>
                            <div class="content"><a href="2014.php" class="j">2014</a><a href="#" class="z"></a><a href="#" class="z"></a></div>
                           </div>
                        </div>
                    </div>
                 </div>
                 </div>
             <div class="futter">
               <div class="futter-background">
                <img src="image/futter.png">
               </div>
               
               <div class="futter-content">
               <div class="icon-and-join">
               <div class="icon-b"><a href="/hiddenleaf"><img src="image/logo.svg" alt=""></a></div>
               <div class="icon-and-join-dividder"></div>
               <div class="join">
                <div class="div-one">Join now</div>
                <div class="div-tow">HIDDENLEAF GROUP</div>
               </div>
               </div>
               <div class="search-headding">
                <div class="div-one">SEARCH ENGINE</div>
                <div class="icon-and-join-dividder"></div>
                <div class="div-tow">Searching anime what you want.</div>
               </div>
               <div class="search">
               <input type="text" name="" id="" placeholder="Search anime...">
               <div class="search-icon">
               <i class="fa fa-search fa-1x " aria-hidden="true"></i>
               </div>
               </div>
               <div class="disclimer">Hiddenleaf does not store any file on our server, we only share link to the media which is hosted on 3ed party services.</div>
              <div class="copyright">copyright 2024 &#169 hiddenleaf, all rights reserved.</div>
             </div>
    <script src="script/script.js"></script>
    <script src="script/scroll.js"></script>
    <script src="script/script2.js"></script>
    <script src="script/multiplesource.js"></script>
</body>
</html>