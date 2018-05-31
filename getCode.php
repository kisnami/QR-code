<?php

	//lib imported
 	require('phpqrcode/qrlib.php');
 	
 	$name=$_GET['name'];
 	$i=0;
 	while ( $i<1) {
 	//make constructor call whatever ode you want just run it
 	QRcode::png("$name","qrcode/$i.png",QR_ECLEVEL_M);
 	echo "<img src='qrcode/$i.png' />";
 	echo "&emsp;";	
 	$i++;
 	}
 	
 	
?>