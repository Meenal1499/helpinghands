<?php
// for sign up
include("connect.php");
// $sql="CREATE DATABASE capstone";
// if(mysqli_query($conn,$sql))
// {
//     echo "Database created successfully";
// }
// else
// {
//     echo "Error creating database".mysqli_error($conn);
// }

// $sql="CREATE TABLE users(
//     username VARCHAR(30) PRIMARY KEY NOT NULL,
//     password VARCHAR(30) NOT NULL,
//     confpassword VARCHAR(30) NOT NULL,
//     created TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";
// if ($conn->query($sql) === TRUE) {
//     echo "Table created successfully";
// } else {
//     echo "Error creating table: " . $conn->error;
// }
$r=2;
if(isset($_POST["signup"]))
{   
    $a=$_POST["username"];
    $b=$_POST["password"];
    $c=$_POST["confpassword"];
 
    $check=mysqli_query($conn,"select * from users where username='$a'");
    $checkrows=mysqli_num_rows($check);

   if($checkrows!=0) 
   {
      $r=0;
   } 
   else 
   { 
    if($b==$c)
    {
      $sql="INSERT INTO users(username,password,confpassword) VALUES('".$a."','".$b."','".$c."')";
      if(mysqli_query($conn,$sql))
      {
        $r=1;
      }
    }
   }
}
?>
<?php
 // for sign in
$f=2;
if(isset($_POST["signin"]))
{  
$n=$_POST["username"];
$p=$_POST["password"];

$sql1="SELECT username,password FROM users WHERE username='$n' AND password='$p'";
$query=mysqli_query($conn,$sql1);
$num=mysqli_num_rows($query);
if($num==1)
{
    session_start();
    $_SESSION["naam"]=$n;
    header("location:interface.php");
}
else
{  
    $f=0;
}

}

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Helping Hands</title>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      <link rel="stylesheet" href="./css/style.css">
<script>
function validate()
{
  var n=document.forms["myform"]["username"];
  var p=document.forms["myform"]["password"];
  var pp=document.forms["myform"]["confpassword"];
 
  if(p.value.length<6)
  {
    swal("Oops...", "Password should be atleast 6 characters long!", "error");
  	return false;
  } 
  r = /[0-9]/;
  if(!r.test(p.value)) 
  {
    swal("Oops...", "Password should contain one numeric digit!", "error");
    return false;
  }
  var letters = /[0-9]/;
  if(n.value.match(letters))
  {
    swal("Oops...", "Username should contain alphabets only!", "error");
    return false;
  }
  if(p.value!=pp.value)
  {
    swal("Oops...", "Password & Confirm Password does not match!", "error");
    return false;
  }
}
</script>
</head>
<body style="background-image:url('./images/4.jpg');background-repeat: no-repeat;background-size: cover;">
  <div class="login-wrap" style="background:rgba(40,57,101,.9);; opacity: 0.8;filter: alpha(opacity=50);">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">

      <form class="sign-in-htm" action="<?php $_PHP_SELF ?>" method="POST">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="u1" name="username" type="text" class="input" required >
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="p1" name="password" type="password" class="input" data-type="password" required >
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In" name="signin" style="font-family: 'Comic Sans MS'; ">
        </div><br>
        <?php
        if($f==0)
        {
             echo "<center><h3><font color='#FFD700'>Username & Password does not match!</font></h3</center>";
        }
        ?>
        <?php
        if($r==1)
        {
             echo "<center><h3><font color='#7CFC00'>User Registered Sucsessfully.</font><h3></center>";
        }
        elseif($r==0)
        {
             echo "<center><h3><font color='#FFD700'>Username already exists!</font><h3></center>";
        }
        ?>
        <div class="hr"></div>
      </form>

    <form name="myform" class="sign-up-htm" action="<?php $_PHP_SELF ?>" method="POST" onsubmit="return validate()">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input id="u2" name="username" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="p2" name="password" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="p3" type="password" name="confpassword" class="input" data-type="password" required>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up" name="signup" style="font-family: 'Comic Sans MS'; ">
        </div><br><br>
        <?php
          echo"<font color='#FFD700'>*Password length must be 6.</font><br>";
          echo"<font color='#FFD700'>*Password should contain atleast 1 digit.</font><br>";
          echo"<font color='#FFD700'>*Username should contain only alphabets.</font>";
        ?>

      </form>
    </div>
  </div>
</div> 
</body>
</html>