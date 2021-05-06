<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "registration";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['save']))
{	 
	 $image = $_POST['image'];
	 $name = $_POST['name'];
	 $price = $_POST['price'];
	 echo "$first_name";
	 $sql = "INSERT INTO items(image,name,price)
	 VALUES ('$image','$name','$price')";
	 if (mysqli_query($conn, $sql)) {
		echo "New record created successfully !";
		header("refresh:1; url=insert.php");
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>