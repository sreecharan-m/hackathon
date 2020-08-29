<?php

$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

$id = $_GET['id'];

$sql = "SELECT * FROM mainarticles WHERE id='$id'";

$result = mysqli_query($conn, $sql);
$data= mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_POST['submit']))
{
    $a = $_POST['title'];
	$b = $_POST['content'];
	$c = $_POST['author'];

	 $sql = "UPDATE mainarticles SET heading='$a', content='$b', author='$c' WHERE id='$id'";

	 if(mysqli_query($conn,$sql))
    {

    	echo "<script>alert('successfully updated')</script>";
    }

    else {

    	 echo mysqli_error($conn);
    }
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Cricblog admin</title>

<style type="text/css">
	
  #fullcontent {

  	 width: 100vw;
  	 height: 100vh;
  	 display: flex;
  	 flex-direction: column;
  	 justify-content: center;
  	 align-items: center;
  }

  .t-elements {

     	padding: 10px;
     	margin-top: 2vh;
     	margin-bottom: 1vh;
     	font:18px Open Sans;
        text-align: center;

    }

   .tde {

     	padding: 10px;
     	font:28px Open Sans;
        text-align: center;
        height: 20px;
     } 

</style>

</head>
<body>

	<div id="fullcontent">
		
		<form method="POST" action="articlesadd.php">
			
            <table>
                  
                <tr class="t-elements">
                    <td class="tde"><input type="text" name="title" placeholder="<?php echo $data[0]['heading'] ?>" style="text-align: center; border-radius: 10px;"></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><textarea id="content" name="content" rows="40" cols="200"><?php echo $data[0]['content'] ?></textarea></td>
                </tr>

                <tr class="t-elements">
                    <td class="tde"><input type="text" name="author" placeholder="<?php echo $data[0]['author'] ?>" style="text-align: center; border-radius: 10px;"></td>
                </tr>

            </table>    

            <div style="display: flex; justify-content: center;">
              <button style="text-align: center; margin-top: 20px; padding: 5px; font-size: 20px; cursor: pointer;" name="submit">update Article</button>
              </div>

		</form>

	</div>

</body>
</html>