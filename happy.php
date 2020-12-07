<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
      <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
      *{
        padding: 0 ;
        margin: 0;
      }
    body {




background-image: linear-gradient(to top,rgb(248, 248, 164)  ,rgb(245, 245, 192),white);
 background-repeat: no-repeat;
 margin: 0;

}



.quotebox{
padding-top: 0.08rem;
    background-image: linear-gradient(-45deg, rgb(240, 210, 231), rgb(51, 27, 27) );
    box-shadow: 1px 2px 4px black;
    height:200px;
    width:90%;
    border-radius: 5px;
    margin-left: 5%;

}

.moviebox{

    background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
    box-shadow: 1px 2px 4px black;
    height:450px;
    width:88%;
    border-radius: 5px;
    margin-left: 10%;
    margin-bottom:1rem;

}

.podcastbox{

    background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
    box-shadow: 1px 2px 4px black;
    height:450px;
    width:88%;
    border-radius: 5px;



}
h1{
	font-style: italic;
	text-shadow: 1px 1px 2px rgb(121, 115, 115);
	font-size: 2rem;
}

.title{
	width: 30%;


}
.quote{
	width: 15%;
}

.movie{
	width: 50%;
}

.long{
	width: 35%;

}



@media(max-width: 900px){
.title{
	width: 50%;


}
.quote{
	width: 30%;
}
.moviebox{
padding-top: 0.08rem;
    background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
    box-shadow: 1px 2px 4px black;
    height:400px;
    width:90%;
    border-radius: 5px;
    margin-left: 5%;
     margin-bottom:1rem;

}
.podcastbox{

    padding-top: 0.08rem;
    background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
    box-shadow: 1px 2px 4px black;
    height:400px;
    width:90%;
    border-radius: 5px;
    margin-left: 5%;
     margin-bottom:1rem;
}

}

@media(min-width: 900px){


.grid{
		display: grid;
	grid-template-columns: 1fr 1fr;
	grid-template-rows: 1fr;
}

iframe{
  margin-top: 2rem;
  width: 380;
  height: 100;
}
}

h2{
  font-family: "Vibur",cursive;
}


.logout{

    margin: 2rem;
    width: 7rem;
    color: black;
    background-color:rgb(231, 229, 113);
    border: none;
    border-radius: 5px;
    font-size: 1.5rem;

}

.logout:hover{
    color: white;
    background-color: #802ec4;
}
button:hover {
  transform: translatey(3px);
  box-shadow: none;
}

/* buttons hover Animation */
button:hover {
  animation: ani9 0.4s ease-in-out infinite alternate;
}
@keyframes ani9 {
  0% {
    transform: translateY(3px);
  }
  100% {
    transform: translateY(5px);
  }
}

i{
  margin-left: 0.5rem;
}

.logout{

margin: 2rem;
width: 7rem;
color: black;
background-color:rgb(231, 229, 113);
border: none;
border-radius: 5px;
font-size: 1.2rem;
height:2rem;

}

i{
margin-left:0.5rem;
}
 .logout:hover{
     color: white;
     background-color: #802ec4;
 }
 button:hover {
   transform: translatey(3px);
   box-shadow: none;
 }

 /* buttons hover Animation */
 button:hover {
   animation: ani9 0.4s ease-in-out infinite alternate;
 }
 @keyframes ani9 {
   0% {
     transform: translateY(3px);
   }
   100% {
     transform: translateY(5px);
   }
 }

 h4{
         font-family: "Vibur", cursive;
      }

      .logo{
        width:10%;
        margin-left:35rem;
      }

     @media(max-width:900px)
     {
      .logo{
        width:27%;
        margin-left:11rem;
      } 
     }
</style>
<body>
 <div style="text-align:right;">
 <a href="help.html">
 <button class="logout">Proceed<i class="fa fa-arrow-right"></i></button></a>
 </div>
 <img src="logo.png" class="logo">
<div style="text-align:center;">
	<h4>Refresh for a personalized moodboard!</h4>
	 </div>
  <?php
$conn = mysqli_connect("localhost","root","root", "moody");
  $sql = "SELECT * FROM `happy` WHERE id=FLOOR(RAND()*(97-1+1)+1)";
$result = $conn->query($sql);


{while ($row = $result->fetch_assoc()){

  echo '<div style="text-align: center;">';
  	echo '<img src="moodboard.png" class="title">';

  	  echo '<div style="text-align: center;">';
  echo '<img src="sad/gif.png" class="quote">';
echo '  <br>';
echo '<img style="width:43%;" src='.$row['gif'];'>';

   echo '</div>';


    echo '<br>';

  echo ' <div class="grid">';

    echo ' <div class="moviebox" style="text-align: center;">';
  	  echo '<br>';
  echo '<img src="none/justmovie.png" class="movie">';
  echo '<br>';
  echo'<img  src='.$row['movies'];'
   >';
  echo '<br>';
echo '<h2> '.$row['moviename'];
  echo '	</div> ';


  	echo '<div class="podcastbox" style="text-align: center;">';

  echo '<img src="happy/spotify.png" class="long">';
  echo '<br>';
 echo '<iframe  '.$row['playlist'];'></iframe>';
  	echo '</div>';
  echo '</div>';
   echo '</div>';
}
}
?>


</body>
</html>
