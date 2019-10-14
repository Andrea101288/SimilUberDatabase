
<html>
<head>
  <title>controllo registrazione</title>
  <meta name="GENERATOR" content="Evrsoft First Page">
</head>

<body style="background-color:lightblue">
<?php
  
	session_start();
	
   $username = $_REQUEST["username"];
   $password = $_REQUEST["password"];
   $email = $_REQUEST["email"];
   $nome = $_REQUEST["nome"];
   $cognome = $_REQUEST["cognome"];
   $data_nascita = $_REQUEST["data_nascita"];
   $citta_residenza = $_REQUEST["citta_residenza"];
   $via_residenza = $_REQUEST["via_residenza"];
   $numero_civico = $_REQUEST["numero_civico"];
   $modalita_pagamento = $_REQUEST["modalita_pagamento"];
   $numero_patente = $_REQUEST["numero_patente"];
   
   
   // setto la variabile session
   $_SESSION['email'] = $email;
   
   // mi connetto al database
   $conn = mysqli_connect("localhost", "root", "") or die("Problemi nello stabilire la connessione");
   mysqli_select_db($conn, "similUber") or die("Errore di accesso al data base utenti");

   //controllo duplicati: non posso accettare due user name uguali
   $result = mysqli_query($conn, "select * from utente where email='$email'");
  
   if (mysqli_num_rows($result)>0) //trovato!
	{
    mysqli_close($conn); 
    echo "<a href='registrazioneConducente.php'> User Name gia' utilizzato. Riprova. </a>";
	}
   else
   {				   					  
    $comando ="INSERT INTO utente(username, password, email, nome, cognome, data_nascita , citta_residenza, via_residenza, numero_civico, modalita_pagamento, numero_patente, feedback) 
				VALUES('".$username."', '".$password."', '".$email."', '".$nome."', '".$cognome."', '".$data_nascita."', '".$citta_residenza."', '".$via_residenza."', '".$numero_civico."','".$modalita_pagamento."', '".$numero_patente."' , NULL);";
  
		if (!mysqli_query($conn, $comando)){
		  echo "Inserimento fallito <br />";
		  mysqli_close($conn); 
		echo "<a href='registrazioneConducente.php'> Si e' verificato un errore tecnico: prego riprovare. </a>";
		}else{
			mysqli_close($conn); 
		}	echo "<a href='paginaIniziale.php'>Inserimento effettuato. Nuova Registrazione avvenuta</a>";
	}
?>
</body>
</html>
