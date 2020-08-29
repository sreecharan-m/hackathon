<?php

$id = $_GET['id'];


$conn=mysqli_connect('localhost','shaun','test1234','hackathon');

$sql = "DELETE FROM mainarticles WHERE id='$id'";

if(mysqli_query($conn,$sql))
    {

    	echo "<script>alert('successfully deleted')</script>";
    }

    else {

    	 echo mysqli_error($conn);
    }

?>