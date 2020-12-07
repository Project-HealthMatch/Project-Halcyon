<?php
session_start();


$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Password =$_POST['Password'];
$confirm = $_POST['confirm'];
$countryCode = $_POST['countryCode'];
$phone =  $_POST['phone'];
$Pass = password_hash($Password,PASSWORD_BCRYPT);
$conf = password_hash($confirm,PASSWORD_BCRYPT);
if($Password == $confirm){ echo "";
}else{
  echo die("password incorrect,try again");
}


if (!empty($Name) || !empty($Email) || !empty($Password) || !empty($confirm)  )
{ $host = "localhost";
  $dbusername = "root";
  $dbpassword = "root";
  $dbname = "moody";
 

  $conn = new mysqli($host,$dbusername,$dbpassword,$dbname);
  if (mysqli_connect_error())
  {
    die('Connect Error('.mysqli_connect_errorno().')'. mysqli_connect_error());
  }
  else {


    $SELECT = "SELECT Email FROM sign WHERE Email =? Limit 1 ";
    $INSERT = "INSERT INTO sign (Name,Email,Password,countryCode,phone) values(?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$Email);
    $stmt->execute();
    $stmt->bind_result($Email);
    $stmt->store_result();
    $rnum= $stmt->num_rows;

    if($rnum==0){
    $stmt->close();
    $stmt = $conn->prepare($INSERT);

    $stmt->bind_param("sssss",$Name,$Email,$Pass,$countryCode,$phone);

    $stmt->execute();
    $_SESSION["Email"]=$Email;

    echo "welcome to moodjournal";
    header("Location:moodjournal.php");
}
  else { 
        
  echo '<script>alert("Email Account already exists!")</script>';
  header("Location:moodjournallogin.html");}
  $stmt->close();
  $conn->close();
       }
}


  else{
    echo "all fields required";
    die();
  }
  ?>
