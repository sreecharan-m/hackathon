<?php


$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

session_start();

if(isset($_SESSION['logged_in']))

{
     
   

}

else {

	header('location: index.php');
}


$sql = "SELECT * FROM mainarticles";
$result = mysqli_query($conn, $sql);
$data= mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html>

<head>
	<title>Cric Blog</title>

<style type="text/css">
	
   #fullcontent {

   width: 100vw;
   justify-content: center;
   align-items: center;
   flex-direction: column;

   }

   .list {
    
     text-align: center;
   	 margin-top: 4vh;
   	 font-size: 20px;
   }

   a {

   	 text-decoration: none;
   	 color: #000;
   }

</style>

</head>
<body>

	<h1 style="width: 100vw; text-align: center;">Update Article</h1>

	<div id="fullcontent">
		
           <?php foreach($data as $key){ ?>


                <div class="list">
                	
                 <a href="articlesindupdate.php?id=<?php echo $key['id'] ?>"><?php echo $key['heading'] ?></a>

                </div>


           <?php } ?>

	</div> 

</body>
</html>