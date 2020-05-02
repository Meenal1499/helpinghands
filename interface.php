<?php
include("header1.html");
session_start();
if(!isset($_SESSION['naam']))
{
  header('location:home.php');
}
?>

<!doctype html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./js/java1.js"></script>  
  <title>Helping Hands</title>
</head>
<html>
<body style="background-color:#C2DFFF;">
  <div class="container">
		<div class="row">
      <div class="col-sm-4" style="margin-left:-80px;">
       <a href="https://1410inc.xyz/video-call-app/comm.html?room=uptb4y4w3f" class="btn btn-primary btn btn-lg my-2 my-sm-0" type="submit" name="call"><span class="glyphicon glyphicon-facetime-video"></span> Call</a>

  		</div>
    	</div>
    </div>
<br>
	<div class="container-fluid">
  <h2 style="font-family: Comic Sans MS;">Welcome<b> <?php echo $_SESSION['naam']; ?></b>, now lets start with the basics</h2><hr>
	
<img src="./images/A.jpg" id="1" style="margin-left:110px;"height="250px"width="350px" onmouseover="change1(1)"onmouseout="change1(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/B.jpg" id="2" height="250px"width="350px" onmouseover="change2(1)"onmouseout="change2(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/C.jpg" id="3" height="250px"width="350px" onmouseover="change3(1)"onmouseout="change3(0)"><br><br>

<img src="./images/D.jpg" id="4" style="margin-left:110px;"height="250px"width="350px" onmouseover="change4(1)"onmouseout="change4(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/E.jpg" id="5" height="250px"width="350px" onmouseover="change5(1)"onmouseout="change5(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/F.jpg" id="6" height="250px"width="350px" onmouseover="change6(1)"onmouseout="change6(0)"><br><br>

<img src="./images/G.jpg" id="7" style="margin-left:110px;"height="250px"width="350px" onmouseover="change7(1)"onmouseout="change7(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/H.jpg" id="8" height="250px"width="350px" onmouseover="change8(1)"onmouseout="change8(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/I.jpg" id="9" height="250px"width="350px" onmouseover="change9(1)"onmouseout="change9(0)"><br><br>

<img src="./images/J.jpg"id="10"style="margin-left:110px;"height="250px"width="350px"onmouseover="change10(1)"onmouseout="change10(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/K.jpg" id="11" height="250px"width="350px" onmouseover="change11(1)" onmouseout="change11(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/L.jpg" id="12" height="250px"width="350px" onmouseover="change12(1)" onmouseout="change12(0)"><br><br>

<img src="./images/M.jpg"id="13"style="margin-left:110px;"height="250px"width="350px"onmouseover="change13(1)"onmouseout="change13(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/N.jpg" id="14" height="250px"width="350px" onmouseover="change14(1)" onmouseout="change14(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/O.jpg" id="15" height="250px"width="350px" onmouseover="change15(1)" onmouseout="change15(0)"><br><br>

<img src="./images/P.jpg"id="16"style="margin-left:110px;"height="250px"width="350px"onmouseover="change16(1)"onmouseout="change16(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/Q.jpg" id="17" height="250px"width="350px" onmouseover="change17(1)" onmouseout="change17(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/R.jpg" id="18" height="250px"width="350px" onmouseover="change18(1)" onmouseout="change18(0)"><br><br>

<img src="./images/S.jpg"id="19"style="margin-left:110px;"height="250px"width="350px"onmouseover="change19(1)"onmouseout="change19(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/T.jpg" id="20" height="250px"width="350px" onmouseover="change20(1)" onmouseout="change20(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/U.jpg" id="21" height="250px"width="350px" onmouseover="change21(1)" onmouseout="change21(0)"><br><br>

<img src="./images/V.jpg"id="22"style="margin-left:110px;"height="250px"width="350px"onmouseover="change22(1)"onmouseout="change22(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/W.jpg" id="23" height="250px"width="350px" onmouseover="change23(1)" onmouseout="change23(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/X.jpg" id="24" height="250px"width="350px" onmouseover="change24(1)" onmouseout="change24(0)"><br><br>

<img src="./images/Y.jpg"id="25"style="margin-left:110px;"height="250px"width="350px"onmouseover="change25(1)"onmouseout="change25(0)">
&nbsp&nbsp&nbsp&nbsp
<img src="./images/Z.jpg" id="26" height="250px"width="350px" onmouseover="change26(1)" onmouseout="change26(0)">

<br><br>
</div>
</body>
</html>

<?php
include("footer1.html");
?>