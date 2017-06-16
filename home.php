<form action="upload.php" method="post" enctype="multipart/form-data">
		<?php 
			$number=$_POST["number"];
			for ($i=0; $i < $number ; $i++){
		 	echo "<input type='file' name='upload[]'>"."<br/>"."<br/>";
		  }
		?>
	<input type="submit" value="確定">
</form>