

 

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
   
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
     body {
 	background: linear-gradient(-45deg, #52c2ee, #77b4ec, #7adff8, #e464e4);

 	animation: gradient 15s ease infinite;
 }

 @keyframes gradient {
 	0% {
 		background-position: 0% 50%;
 	}
 	50% {
 		background-position: 100% 50%;
 	}
 	100% {
 		background-position: 0% 50%;
 	}
 }


 .quotebox{
 padding-top: 0.08rem;
     background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
     box-shadow: 1px 2px 4px black;
     height:300px;
     width:95%;
     border-radius: 5px;
     margin-left: 3%;
     margin-top: 1rem;
padding:0.5rem;
 }

 .moviebox{

     background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
     box-shadow: 1px 2px 4px black;
     height:405px;
     width:90%;
     border-radius: 5px;

     padding-bottom: 1rem;

 }
 


 .podcastbox{

     background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
     box-shadow: 1px 2px 4px black;
     height:405px;
     width:90%;
     border-radius: 5px;
     margin-left: 1%;
     padding-bottom: 1rem;

 }
 h1,h2{
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
 	width: 60%;
 }

 .video{
 	width: 30%;
 }

 .long{
   width:60%;
 }



 @media(max-width: 900px){
 .title{
 	width: 50%;


 }
 .video{
   width: 70%;
 }
 .quote{
 	width: 30%;
 }

 .gif{
  width: 40%; 
 }
 .moviebox{
 padding-top: 0.08rem;
     background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
     box-shadow: 1px 2px 4px black;
     height:320px;
     width:90%;
     border-radius: 5px;

    margin-top:1rem;
 }
 

 h1,h2{
 	font-style: italic;
 	text-shadow: 1px 1px 2px rgb(121, 115, 115);
 	font-size: 1.5rem;
 }

.quotebox{
 padding-top: 0.08rem;
     background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
     box-shadow: 1px 2px 4px black;
     height:420px;
     width:90%;
     border-radius: 5px;
padding:0.5rem;
    margin-top:1rem;
 }
 .podcastbox{

     background-image: linear-gradient(-45deg, rgb(240, 210, 231), white );
     box-shadow: 1px 2px 4px black;
     height:320px;
     width:99%;
     border-radius: 5px;


    margin-top: 1rem;
    padding:1rem;
 }

 }

 @media(min-width: 900px){


  .gifbox{

width:30%;
}
  .videobox{
 padding-top: 0.08rem;
 padding-right: 2rem;


     box-shadow: 1px 2px 4px black;
     height:320px;
     width:80%;
     border-radius: 5px;
    padding: 0;
    margin-top:1rem;
 }


 .gif{
   width: 15%;
 }

 iframe{

   width:99%;
   height: 700px;
 }

 

 @media(max-width: 900px)
 {
   h1{
     font-size:1rem;
   }

  .gifbox{

width:80%;
margin:1rem;
}
   .gif{
     width: 10%;
   }
 iframe{

   width:99%;
   height: 200px;
 }
 

 .moviebox{
   margin-left: 1.5rem;
   height: 370px;
 }
 .podcastbox{
   margin-left: 1.5rem;
   width:90% ;
   padding:0;
 }
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
 
 .h4{
         font-family: "Vibur", cursive;
      }

@media(max-width:900px)
{
      .quotelines{
        font-size: 1rem;
      }
}

 </style>
 <body>
  <div style="text-align:right;">
  <a href="help.html">
  <button class="logout">Proceed<i class="fa fa-arrow-right"></i></button></a>
  </div>
  <img src="logo.png" class="logo">
   <div style="text-align:center;" class="h4">
	<h4 >Refresh for a personalized moodboard!</h4>
	 </div>
   
  <?php
$conn = mysqli_connect("localhost","root","root", "moody");
$sql = "SELECT * FROM `sad` WHERE id=FLOOR(RAND()*(97-1+1)+1)";
$result = $conn->query($sql);


{while ($row = $result->fetch_assoc()){

  echo'<div style="text-align: center;">';
  echo' <img src="moodboard.png" class="title">';
   echo '<br>';
    echo '<img src="sad/gif.png" class="gif">';
    echo '<br>';

  
 echo '<img style="width:43%;" src='.$row['gif'];'>';

echo '<br>';
   echo '<div class="quotebox">';
 	  echo '<div style="text-align: center;" class="quoteline">';
 echo '<img src="sad/quote.png" class="quote">';
 echo '<h2>  '.$row['quotes'];
 	echo '</div>';


  echo '</div>';
   echo '</div>';

   echo '<br>';

 	echo '<div  style="text-align: center;">';

 echo '<img src="sad/video.png" class="video">';
 echo '<iframe class="iframe" '.$row['links'];'></iframe>';
 	echo '</div>';

echo '</div>';


}
}
?>


</body>
</html>
