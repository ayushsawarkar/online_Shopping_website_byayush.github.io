<?php



if(isset($_POST['save']))
{	 
     $fullname=$_POST['fullname']."<br>";
     $email = $_POST['email']."<br>";
     $addressline1 = $_POST['addressline1']."<br>";
     $addressline2 = $_POST['addressline2']."<br>";
     $city = $_POST['city']."<br>";
     $state = $_POST['state']."<br>";
     $zip = $_POST['zip']."<br>";
	 $cardname = $_POST['cardname']."<br>";
	 $cardnumber = $_POST['cardnumber']."<br>";
	 $expmonth = $_POST['expmonth']."<br>";
     $expyear = $_POST['expyear']."<br>";
     $cvv = $_POST['cvv']."<br>";
     $total = $_POST['price']."<br>";
     $item = $_POST['item']."<br>";
     echo "$fullname"."<br>";

	 echo "$email"."<br>";
     
     echo "$addressline1"."<br>";
     echo "$addressline2"."<br>";
     echo "$city"."<br>";
     echo "$state"."<br>";
     echo "$zip"."<br>";
     echo "$cardname"."<br>";
     echo "$cardnumber"."<br>";
     echo "$expmonth"."<br>";
     echo "$expyear"."<br>";
     echo "$cvv"."<br>";
     echo "$total"."<br>";
     echo "$item"."<br>";

	
}
?>