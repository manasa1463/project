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
#footer {
	
	height:100px;
	width:100px;
	text-align:center;
	margin:0 auto;
    text-style:solid;
	font-size:30px;
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
<div id="myntra" class="common">
<img src="myntra.jpg" class="image" width="100%">
<div class="middle">
<div class="text">Myntra</div>
</div>
</div>
<div id="flipkart" class="common">
<img src="flipkart.jpg" class="image" width="100%">
<div class="middle">
<div class="text">Flipkart‎</div>
</div>
</div>
<div class="err"></div>
<div id="amazon" class="common">
<img src="amazon.png" class="image" style="width:100%">
<div class="middle">
<div class="text">Amazon</div>
</div>
</div>
<div id="jabong" class="common">
<img src="jabong.jpg" class="image" style="width:100%">
<div class="middle">
<div class="text">jabong</div>
</div>
</div>
</div>
<div id="footer">
<a id="link" href="index.php?logout='1'" style="color: red;">logout</a>.
</div>
<script type="text/javascript">

document.getElementById("myntra").onclick=function() {

window.location="https://www.myntra.com/";

}

document.getElementById("flipkart").onclick=function() {

window.location="https://www.flipkart.com/";

}
document.getElementById("amazon").onclick=function() {

window.location="https://www.amazon.in/";

}

document.getElementById("jabong").onclick=function() {

window.location="https://www.jabong.com/";

}




</script>
</body>
</html>