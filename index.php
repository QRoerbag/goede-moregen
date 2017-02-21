<?php

date_default_timezone_set("Europe/amsterdam");

$uur = date("H");
$minuut = date("i");
$seconde = date ("s");

if ($uur >= 0) {
	
	$tijd = "nacht";
	if ($uur >= 6) {
			
	$tijd = "morgen";
	if ($uur >= 12) {
					
	$tijd = "middag";
	if ($uur >= 18) {
						
	$tijd = "avond";

						}

				}

		}

}


?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="goede.css">
	<meta http-equiv="refresh" content="1">
	<title>Goeie <?php echo $tijd; ?></title>
</head>
<body class="<?php echo $tijd;?>">

<div class="basis">
	<h1 class="goeie">Goeie <?php echo $tijd; ?></h1>
	<h1 class="tis">Het is nu <?php echo "$uur:$minuut:$seconde"; ?></h1>
</div>

</body>
</html>