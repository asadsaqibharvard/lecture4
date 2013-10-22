<?php
$boxes = "";
for($i = 0; $i < 10; $i++){
	//echo $i.' do loop<br>';
	//$boxes = $boxes."<div class='card'>".$i."</div>";


	$w = rand(100, 500);
	$h = rand(100, 500);
	$boxes = $boxes."<div class='box' style='width: ".$w."px; height:".$h."px;'>".$i."</div>";
}


/*rand, inline css, php talking to css, different box width every time*/


?>