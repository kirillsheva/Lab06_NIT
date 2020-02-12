<?php

 
include("./config.php");
		$query = "SELECT * FROM chatroo";
		$run = mysqli_query($con,$query);
		while($row = mysqli_fetch_array($run)){


	?>
		<p>
			<span style="color: #ebe534;"><?php echo htmlspecialchars($row['name'].": ");?></span>
			<span style="color: #FFFFFF;"><?php echo htmlspecialchars($row['message']);?></span>
			<span style="color: #cfd000;float: right;"><?php echo (date ('h:i:s A', strtotime($row['time'])));?></span>
		</p>
<?php    }


?>
