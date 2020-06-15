<?php

$aname=$_POST['aname'];


include_once '../../../connection/connection.php';

$sql="INSERT INTO author (author) VALUES ('".$aname."')";

$query=mysqli_query($con,$sql);

if ($query) {
	?>

		<script>
			window.location.href="../messages/insert-success.php";
		</script>

	<?php
}
else{
	echo "Sorry, Something gone wrong";
}








?>