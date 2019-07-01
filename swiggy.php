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

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style type="text/css">


body {

margin:0 auto;
width:50%;
background-image:url("background.jpg");

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
padding:8px 8px;

}
img {

width:100%;
height:100%;
border-radius:20%;

}

.alert {

margin-top:20px;
text-align:center;

} 

#footer {
	
	height:100px;
	width:100px;
	text-align:center;
	margin:0 auto;
    text-style:solid;
	font-size:30px;
}


a:hover {
	
	text:decoration:underline;
}



</style>

</head>
<body>
<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Select the category you want to look for!!</h4>
  
</div>
<div id="top">


<div id="first" class="common" >
<img src="food.jpg" class="image" style="width:100%" >
<div class="middle">
<div class="text">Food</div>
</div>
</div>
<div id="second" class="common" >
<img src="travel.jpg" class="image" width="100%">
<div class="middle">
<div class="text">Travel</div>
</div>
</div>
<div class="err"></div>
<div id="third" class="common">
<img src="shopping.jpg" class="image" style="width:100%">
<div class="middle">
<div class="text">Shopping</div>
</div>
</div>
<div id="fourth" class="common">
<img src="groceries.jpg" class="image" style="width:100%">
<div class="middle">
<div class="text">Hotels</div>
</div>
</div>
</div>
<div id="footer">
<a id="link" href="index.php?logout='1'" style="color: red;">logout</a>.
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">

document.getElementById("first").onclick=function() {

window.location="zomato.php";

}
document.getElementById("second").onclick=function() {

window.location="travel.php";

}
document.getElementById("third").onclick=function() {

window.location="shopping.php";

}
document.getElementById("fourth").onclick=function() {

window.location="groceries.php";

}



</script>

</body>
</html>