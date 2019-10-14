<html>
<head>
  <title>Login dal DataBase</title>
  <meta name="GENERATOR" content="Evrsoft First Page">
</head>

<body style="background-color:lightblue">
<?php
   
	session_start();
   
	$email = $_REQUEST["email"];
	$password = $_REQUEST["password"];
   
	$_SESSION['email']= $email;
  
	$conn = mysqli_connect("localhost", "root", "") or die("Problemi nello stabilire la connessione");
	mysqli_select_db($conn, "similUber") or die("Errore di accesso al data base utenti");

	//controllo che esistano nel database i dati inseriti
	$sql = "select * from utente where '".$email."' = email AND '".$password."' = password;";
	$result = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($result)>0) //trovato: l'utente può accedere 
	{
    mysqli_close($conn);	 
	echo "<a href='paginaIniziale.php'> Welcome! </a>";
	}
	else // l'utente non esiste 
	{				   					  
  		echo "<a href='login.php'> Dati inseriti non corretti: prego riprovare. </a>";
		mysqli_close($conn);
	}
?>
</body>
</html>
