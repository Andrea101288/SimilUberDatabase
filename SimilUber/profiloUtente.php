<html>
<head>
    <title>profilo utente</title>
</head>
<body style="background-color:lightblue">
	
	<h1><p align="center"> Benvenuto nel tuo profilo personale</p> </h1>
	<h2> <p align="center"></p></h2> 
	<?php
	session_start();

	
	$email = $_SESSION['email'];
	$conn = mysqli_connect("localhost", "root", "") or die("Problemi nello stabilire la connessione");
    mysqli_select_db($conn, "similUber") or die("Errore di accesso al data base utenti");

    //
	// DATI ANAGRAFICI
	//
	
	// nome
	$nome = mysqli_query($conn, "SELECT nome FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($nome);
    $nome = $recordset[0];
	// cognome
	$cognome = mysqli_query($conn,"SELECT cognome FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($cognome);
    $cognome = $recordset[0];
	// data nascita
	$data_nascita = mysqli_query($conn,"SELECT data_nascita FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($data_nascita);
    $data_nascita = $recordset[0];
	// citta residenza
	$citta_residenza = mysqli_query($conn,"SELECT citta_residenza FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($citta_residenza);
    $citta_residenza = $recordset[0];
	// via residenza
	$via_residenza = mysqli_query($conn,"SELECT via_residenza FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($via_residenza);
    $via_residenza = $recordset[0];
	// numero civico
	$numero_civico = mysqli_query($conn,"SELECT numero_civico FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($numero_civico);
    $numero_civico = $recordset[0];
	// numero patente
	$numero_patente = mysqli_query($conn,"SELECT numero_patente FROM utente WHERE email = '$email'");
	$recordset = mysqli_fetch_row($numero_patente);
    $numero_patente = $recordset[0];
    // modalita pagamento
    $modalita_pagamento = mysqli_query($conn,"SELECT modalita_pagamento FROM utente WHERE email = '$email'");
    $recordset = mysqli_fetch_row($modalita_pagamento);
    $modalita_pagamento = $recordset[0];
   
    // stampo tutto
	echo '<h3>Profilo di '.$nome.' '. $cognome.'</h3>' ;
	echo '<h4>nato il '.$data_nascita.'</h4>' ;
	echo '<h4>residente a '.$citta_residenza.'</h4>' ;
	echo '<h4>in via '.$via_residenza.'</h4>' ;
	echo '<h4>numero '.$numero_civico.'</h4>' ;
	echo '<h4>numero di patente: '.$numero_patente.'</h4>' ;
	echo '<h4>modalita di pagamento : '.$modalita_pagamento.'</h4>' ;
	echo '<h4>indirizzo email '.$email.'</h4>' ;
	echo "<h4><a href='modificaProfilo.php'>Modifica</a>  i tuoi dati</h4>" ;
	echo '<p>';
         
?>
	<p align="center"> <a href='paginaIniziale.php'>Home</a> | <a href="logout.php">Logout<a/>  </p>
</body>
</html>