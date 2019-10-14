<html>
<head>
    <title>utenti con un feedback negativo</title>
</head>
<body style="background-color:lightblue">
	
	<h1><p align="center">Elenco degli utenti con un feedback negativo (inferiore di 3) </p> </h1>
	<?php 
	
	
		$conn = mysqli_connect("localhost", "root", "") or die("Problemi nello stabilire la connessione");
		mysqli_select_db($conn, "similUber") or die("Errore di accesso al data base utenti");
		$sql = "select U.username, U.nome, U.cognome, U.feedback from utente U 
								where U.feedback < 3;";
		$result = mysqli_query($conn, $sql);
  
		if (mysqli_num_rows($result) ==0 ) //trovato!
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