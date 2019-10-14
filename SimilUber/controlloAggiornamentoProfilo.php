<html>
<head>
    <title>controllo aggiornamento profilo</title>
</head>
<body style="background-color:lightblue">
	
	<h1><p align="center"></p> </h1>
	<?php 
	
		session_start();
		
		// connessione al database	
		$conn = mysqli_connect("localhost", "root", "") or die("Problemi nello stabilire la connessione");
		mysqli_select_db($conn, "similUber") or die("Errore di accesso al data base utenti");
		
		$email = $_SESSION["email"];
		$citta_residenza = $_REQUEST["citta_residenza"];
		$via_residenza = $_REQUEST["via_residenza"];
		$numero_civico = $_REQUEST["numero_civico"];
		$numero_patente = $_REQUEST["numero_patente"];
		
		$sql = "UPDATE utente SET via_residenza = '$via_residenza', numero_civico = '$numero_civico', citta_residenza = '$citta_residenza', numero_patente = '$numero_patente' 
				WHERE email = '$email'";
		$result = mysqli_query($conn, $sql);
		echo $sql;
		if ($result) // i dati sono stati aggiornati
		{
			
			echo "<a href='profiloUtente.php'>Aggiornamento fatto</a>";
			mysqli_close($conn); 
			
		}
		else
		{				   
		    // c'è sttao un problema nell'inserimento 
			mysqli_close($conn); 
			echo "<a href='modificaProfilo.php'> Si è verificato un errore: riprova! </a>";
		}
		
		
	?>
	<p align="center"> <a href="paginaIniziale.php">Home<a/> | <a href="logout.php">Logout<a/></p>

	
	

</body>
</html>