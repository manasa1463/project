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
background-image:url("background2.jpg");

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

#footer {
	
	height:100px;
	width:100px;
	text-align:center;
	margin:0 auto;
    text-style:solid;
	font-size:30px;
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
a:hover {
	
	text-decoration:underline;
}
a {
	
	text-decoration:none;
}




</style>

</head>
<body>
<div id="top">
<div id="yatra" class="common">
<img src="yatra.jpg" class="image" width="100%">
<div class="middle">
<div class="text">Yatra</div>
</div>
</div>
<div id="trip" class="common">
<img src="trip.png" class="image" width="100%">
<div class="middle">
<div class="text">Tripadvisor</div>
</div>
</div>
<div class="err"></div>
<div id="expedia" class="common">
<img src="expedia.png" class="image" style="width:100%">
<div class="middle">
<div class="text">Ubereats</div>
</div>
</div>
<div id="booking" class="common">
<img src="booking.jpg" class="image" style="width:100%">
<div class="middle">
<div class="text">Booking</div>
</div>
</div>
</div>
<div id="footer">
<a id="link" href="index.php?logout='1'" style="color: red;">logout</a>.
</div>
<script type="text/javascript">

document.getElementById("yatra").onclick=function() {

window.location="https://www.yatra.com/";

}

document.getElementById("trip").onclick=function() {

window.location="https://www.tripadvisor.in/‎";

}
document.getElementById("expedia").onclick=function() {

window.location="https://www.expedia.co.in/";

}

document.getElementById("booking").onclick=function() {

window.location="https://www.booking.com/";

}




</script>
</body>
</html>