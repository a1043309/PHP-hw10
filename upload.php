<?php
	$j=count($_FILES["upload"]["name"]);
	for ($i=0 ; $i<$j ; $i++) { 
		if (isset($_FILES["upload"]["name"][$i])) {
		echo $_FILES["upload"]["name"][$i]."<br/>";
		echo $_FILES["upload"]["tmp_name"][$i]."<br/>";
		echo $_FILES["upload"]["size"][$i]."<br/>";
		echo $_FILES["upload"]["type"][$i]."<br/>";

		$p=pathinfo($_FILES["upload"]["name"][$i]);
		$t=time();

		copy($_FILES["upload"]["tmp_name"][$i],$t.".".$p["extension"]);
		}else{
			echo "失敗";
		}	
	}
?>