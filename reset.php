<?php
session_start();


$con = new mysqli("localhost","root","root","moody");
if (isset($_POST['submit'])){

  $Email = $_POST['Email'];
  $Password = $_POST['Password'];
  $newf= $_POST['newf'];
  $conf = $_POST['conf'];
  $Pass = password_hash($newf,PASSWORD_BCRYPT);
  $Conf = password_hash($conf,PASSWORD_BCRYPT);
  if($newf == $conf){
    echo "Passwords match.";
  }
  else {
    die('password dont match');
  }



  $email_search = " select * from signup where Email= '$Email'";
  $query = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query);




      if($email_count){

        $email_pass = mysqli_fetch_assoc($query);
        $db_pass = $email_pass['Password'];
        $pass_decode = password_verify($Password, $db_pass);
        if($pass_decode)
    {       $_SESSION["Email"]=$Email;

 $sql = "UPDATE signup SET Password='$Pass' WHERE Email='$Email'";
if(mysqli_query($con, $sql)){
    echo " Your password was updated successfully.";
    header("Location: index.html");
} else {
 echo '<script>alert("Passwords do not match!")</script>' . mysqli_error($con);
}

// Close connection
mysqli_close($con);



         }
     else{
       echo '<script>alert("Invalid Password or Email!")</script>'; 
            }}
    else{
  echo '<script>alert("Invalid Password or Email!")</script>'; 
    }

}

?>
