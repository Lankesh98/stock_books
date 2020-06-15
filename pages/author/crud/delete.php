<?php

$id=$_GET['id'];

include '../../../connection/connection.php';

$sql="DELETE FROM author WHERE aut_id ='$id'";

$query=mysqli_query($con,$sql);

if ($query) {
	?>
		<script>
			window.location.href='../messages/delete-success.php'
		</script>

	<?php
}
else{
	echo "Something Gone Wrong";
}



?>