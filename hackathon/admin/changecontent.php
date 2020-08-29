<?php


$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

session_start();

if(isset($_SESSION['logged_in']))

{
     


}

else {

	header('location: index.php');
}


?>


<!DOCTYPE html>
<html>
<head>
	<title>CricBlog Admin</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,300" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

<style type="text/css">
	
#fullcontent {

	width: 90vw;
	height: 80vh;
	display: flex;
	align-items: center;
	justify-content: center;
}

button {

	 outline: none;
	 border:none;
	 background-color: #000;
	 color: #00ffff;
	 font: 25px Open Sans;
	 margin: 50px;
	 cursor: pointer;
}

a {

	text-decoration: none;
	color: #00ffff;
}

</style>

</head>

<body>
	    <h1 style="margin-top: 5vh;">CricBlog Admin</h1>

        <div id="fullcontent">

        	<div id="links">
        		
               <button><a href="changelayout.php" target="_blank">Change Layout</a></button>


               <button><a href="changetext.php" target="_blank">Change Content</a></button>

        	</div>
        	
             

        </div>

</body>

</html>
