<?php
  $Email=$_POST['Email'];
  $date = $_POST['date'];
$images= $_POST['images'];
  $journal = $_POST['journal'];



  $conn = new mysqli("localhost","root","root","moody");
  if($conn->connect_error)
     {
       die('connection failed :' .$conn->connect_error);

     }
     else

     {
       $stmt = $conn->prepare("insert into moods(Email,date,images,journal)
       values(?,?,?,?)");
 $b=implode(",",$images);
       $stmt->bind_param("ssss",$Email,$date,$b,$journal);
       $stmt->execute();
       if($b=='sad'||$b=='crying' )
       {
      header("Location: sadorcrying.php");
}elseif($b=='smiling' ){

    header("Location: happy.php");
}
else{
  header("Location: none.php");
}
       $stmt->close();
       $conn->close();

     }

 ?>
