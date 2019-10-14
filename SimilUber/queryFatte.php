<html>
<head>
    <title>query scelta</title>
</head>
<body style="background-color:lightblue">
	
	<?php
	session_start();
	$interrogazione = $_GET['interrogazione'];
	if($interrogazione == 1){
		require_once 'utentiConducenti.php';
	} else if($interrogazione == 2){
		require_once 'utentiConducentiMeno30.php';
	} else if($interrogazione == 3){
		require_once 'utentiSolo1Mezzo.php';
	} else if($interrogazione == 4){	
		require_once 'utentiConducentiPiuMezzi.php';
	}	 else if($interrogazione == 5){
		require_once 'utentiConducenti7oPiuPosti.php';
	}	 else if($interrogazione == 6){
		require_once 'utentiConducentiFeedNeg.php';
	}	 else if($interrogazione == 7){	
		require_once 'tipi_mezzo.php';
	}	 else if($interrogazione == 8){
		require_once 'utentiFrequenti.php';
	}		 else if($interrogazione == 9){
		require_once 'metodiPagamento.php';
	}	 else if($interrogazione == 10){
		require_once 'sconti.php';
	}	 
	?>
	
</body>
</html>