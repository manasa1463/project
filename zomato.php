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
<div id="swiggy" class="common">
<img src="swiggy.png" class="image" width="100%">
<div class="middle">
<div class="text">Swiggy</div>
</div>
</div>
<div id="zomato" class="common">
<img src="zomato.png" class="image" width="100%">
<div class="middle">
<div class="text">Zomato</div>
</div>
</div>
<div class="err"></div>
<div id="ubereats" class="common">
<img src="ubereats.png" class="image" style="width:100%">
<div class="middle">
<div class="text">Ubereats</div>
</div>
</div>
<div id="foodpanda" class="common">
<img src="foodpanda.jpg" class="image" style="width:100%">
<div class="middle">
<div class="text">Foodpanda</div>
</div>
</div>
</div>
<div id="footer">
<p> <a href="index.php?logout='1'" style="color: red;">logout</a></p>
</div>
<script type="text/javascript">

document.getElementById("swiggy").onclick=function() {

window.location="https://www.swiggy.com/";

}

document.getElementById("zomato").onclick=function() {

window.location="https://www.zomato.com";

}
document.getElementById("ubereats").onclick=function() {

window.location="https://www.ubereats.com";

}

document.getElementById("foodpanda").onclick=function() {

window.location="https://www.foodpanda.in/";

}




</script>
</body>
</html>