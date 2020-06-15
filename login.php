<?php
        session_start();
        $_SESSION['email']='';
        $_SESSION['utype']='';
        $_SESSION['uname']='';


		$email = $_POST['email'];
		$pass = $_POST['pass'];

		include_once "connection/connection.php";

		$sql = "SELECT * FROM users WHERE email = '".$email."' AND pass = '".$pass."' LIMIT 1";
        $result = mysqli_query($con,$sql);
        $num_row=mysqli_num_rows($result);
        $row=mysqli_fetch_array($result);
  

        if ($row == TRUE) 
        {
            $_SESSION['email']=$row['email'];
            $_SESSION['utype']=$row['utype'];
            $_SESSION['uname']=$row['uname'];

			echo "<script>window.location='pages/books/index.php';</script>";
		}

        else
        {
           echo "<script>alert('Your Email or Password incorrect');</script>";
           //echo "<script>window.location='index.php';</script>";
		}
?>