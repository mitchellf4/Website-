<html>
<head>
<title></title>
 <link rel="stylesheet" href="design.css" >
 <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 
 
 <style>

  #header {
	 background:  url("header11.jpg");
	 background-size: cover;
	  margin: 0;
     margin-left: 0px;
    margin-right: 0px;
    padding: 35px;
    text-align: center;

}	
#header2 {
	 background:  url("header11.jpg");
	  margin: 0;
     margin-left: 50%;
    margin-right: 0px;
    padding: 5px;
    text-align: center;

}	

	body {background-color: #F0FFFF;
	margin:0px;
	padding:0;
	}


.topnav {
    overflow: hidden;
    background-color: 		#000000;
}

.topnav a {
	
	 background:  url("newHeader.png");
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
}
.topnav a:hover {
    background-color: 	#1E90FF;
    color: black;
}

  .Maintext{
	
	text-align: center;

	
}
 .p1 {
    position: absolute;
    left: 510px;
    top: 250px;
	padding: 5px;
	
}


.p3 {
    position: absolute;
    left: 510px;
    top: 300px;
	padding: 5px;
}

.p2 

 {
    position: absolute;
    left: 562px;
    top: 350px;
	padding: 5px;
}
 .h1{
	
	 text-align: center;
	 padding: 5px;
	 
 }
 .button {
	 
	position: absolute;
    left: 675px;
    top: 400px;
	 padding: 5px;
 }
  .middle {
   
	padding: 199px;
}
 
 .footer {
	 border-style: solid;
    border-width:  2px 0px 0px 0px      ;
	 
	position:absolute;
   bottom:0;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf; 
 background:  url("header11.jpg");
	 background-size: cover;
    text-align: center;
}
 
 
 
 </style>
 
 
 </head>
<body  onload="startGame()">
<script> 
</script>

<div id="header" >
<h1></h1>
</div>

<div class="topnav">
  <a href="http://localhost:8080/adduser.php">Main</a>
  <a href="http://localhost:8080/AboutMe.php">About Me</a>
  <a href="http://localhost:8080/PlayAGame.php">Play A Game</a>
</div>

<div class="canvas">

</div>

<div class="h1">
<h1>Please add your information</h1>
</div>

<div class="middle">


<form   action="http://localhost:8080/useradded.php" method="post">

<div class="p1">
<p>First Name:  
<input  type="text" name="first_name" size="30" value="" />
</p>
 </div>
<div class="p3">
<p>Last Name:
<input type="text" name="last_name" size="30" value="" />
</p>
 </div>
 <div class="p2">
 <p>ID:
<input  type="name" type name="ID" size="30" value="" />
</p>
</div>
 <div class="button">
<p>
<input type="submit" name="submit" value="Send" />
</p>
</div>
</form>
</div>

 <div class="footer">
<p></p>
</div>

</body>
</html>
