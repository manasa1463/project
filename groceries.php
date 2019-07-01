<?php

 session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }


?>

<html>

<head>

<style type="text/css">


body {

margin:0 auto;
width:50%;
background-image:url("pic6.jpeg");

}

#top {

margin:0 auto;
width:800px;
height:80%;

}

.common:hover {

-webkit-transaction:all 200ms ease-in;
-webkit-transform:scale(1.5);
}

.common {
margin-left:50px;
width:170px;
height:140px;
float:left;
margin-top:70px;
margin-right:90px;
border-radius:20%;
margin-bottom:50px;
}





.err {

clear:both;

}
.middle {

transition: .5s ease;
opacity: 0;
position:relative;
top:-70px;
text-align:center;
}

.common:hover .image{
opacity:0.4;
}

.common:hover .middle {
opacity:1;
}
.text {

background-color:#4CAF50;
color:white;
font-size:16px;
padding:10px 10px;

}


img {

width:100%;
height:100%;
border-radius:20%;

}

#footer {
	
	height:100px;
	width:100px;
	text-align:center;
	margin:0 auto;
    text-style:solid;
	font-size:30px;
}

a {
	
	text-decoration:none;
}
 a:hover {
	 
	 text-decoration:underline;
 }



</style>

</head>
<body>
<div id="top">
<div id="bigbasket" class="common">
<img src="bigbasket.jpg" class="image" width="100%">
<div class="middle">
<div class="text">BigBasket</div>
</div>
</div>
<div id="grofers" class="common">
<img src="grofers.png" class="image" width="100%">
<div class="middle">
<div class="text">Grofers</div>
</div>
</div>
<div class="err"></div>
<div id="grabcery" class="common">
<img src="grabcery.png" class="image" style="width:100%">
<div class="middle">
<div class="text">Grabcery</div>
</div>
</div>
<div id="reliance" class="common">
<img src="reliance.png" class="image" style="width:100%">
<div class="middle">
<div class="text">Reliance</div>
</div>
</div>
</div>
<div id="footer">
<p> <a href="index.php?logout='1'" style="color: red;">logout</a></p>
</div>
<script type="text/javascript">

document.getElementById("bigbasket").onclick=function() {

window.location="https://www.bigbasket.com/";

}

document.getElementById("grofers").onclick=function() {

window.location="https://www.grabcery.com/";

}
document.getElementById("grabcery").onclick=function() {

window.location="https://www.ubereats.com";

}

document.getElementById("reliance").onclick=function() {

window.location="https://relianceretail.com/";

}




</script>
</body>
</html>