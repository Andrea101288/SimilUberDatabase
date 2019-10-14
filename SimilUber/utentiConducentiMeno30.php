<html>
<head>
    <title>utenti conducenti con età inferiore a 30 anni </title>
</head>
<body style="background-color:lightblue">
	
	<h1><p align="center">Elenco degli utenti conducenti presenti nella piattaforma
							che possiedono meno di 30 anni </p> </h1>
	<?php 
	
	
		$conn = mysqli_connect("localhost", "root", "") or die("Problemi nello stabilire la connessione");
		mysqli_select_db($conn, "similUber") or die("Errore di accesso al data base utenti");
		$sql = "select U.nome, U.cognome from utente U 
				where numero_patente is not Null
				AND DATE_ADD(U.data_nascita, INTERVAL 30 YEAR) > now();";	
		echo $sql;		
		$result = mysqli_query($conn, $sql);
  
		if (mysqli_num_rows($result) == 0) //trovato!
		{
			mysqli_close($conn); 
			echo "Nessun risultato trovato";
		}
		else
		{
			echo'<table width="0%" border="1" cellspacing="1" cellpadding="3" 
					align="center" bgcolor="#fffacd"><tr>'; 

			while ($row = mysqli_fetch_row($result)) 
			{ 
              echo '<tr><td>'.implode($row,'</td><td>')."</td></tr>\n"; 
			}
			echo "</table>\n";

        }		
		mysqli_close($conn); 	
	
	?>
	<p align="center"> <a href="paginaIniziale.php">Home<a/> | <a href="logout.php">Logout<a/></p>

	
	

</body>
</html>