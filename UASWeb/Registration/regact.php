<?php
include 'koneksi.php';

			$fname  	= $_POST['fname'];
			$lname    = $_POST['lname'];
			$id		    = $_POST['id'];
      $username = $_POST['username'];
      $pwd      = $_POST['pwd'];
      $address1 = $_POST['address1'];
      $address2 = $_POST['address2'];
      
mysqli_query($koneksi, "INSERT INTO masuk VALUES('$fname', '$lname', '$id', '$username',
'$pwd', '$address1', '$address2')");
header("location: Registration.php");
?>