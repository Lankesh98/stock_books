<?php


$aid=$_POST['aut_id'];
$aname=$_POST['aname'];




include '../../../connection/connection.php';

$sql=" UPDATE author SET author='".$aname."' WHERE aut_id = '".$aid."' ";

$query=mysqli_query($con,$sql);

if ($query) {
	?>

		<script>
			window.location.href="../messages/update-success.php";
		</script>

	<?php
}
else{
	echo "Sorry, Something gone wrong";
}








?>