<html>
<head>
    <title>modifica profilo</title>
</head>
<html>
<head>
    <title> modifica del profilo personale </title>
	<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body style="background-color:lightblue">
	<?php
	session_start();
	?>
	<h1><p align="center"> Inserisci i nuovi dati del tuo profilo </p> </h1>
	
	<form  method="post" name="registra" action="controlloAggiornamentoProfilo.php" id="accesso">
    <table>
	 <tr>
        <td>citta_residenza</td>

        <td><input id="citta_residenza" name="citta_residenza" required></td>
      </tr>
	  
      <tr>
        <td>via_residenza</td>

        <td><input id="via_residenza" name="via_residenza" required></td>
      </tr>
	  
		<tr>
        <td>numero_civico</td>

        <td> <input id="numero_civico" name="numero_civico" required> </td>
      </tr>
		<tr>
        <td>numero_patente</td>

        <td> <input id="numero_patente" name="numero_patente" required> </td>
      </tr>
		<tr>
        <td>modalita_pagamento</td>

        <td> <input id="modalita_pagamento" name="modalita_pagamento" required> </td>
      </tr>
		
    </table> <br>
	
	<input id="ok" value="AGGIORNA" type="submit" name="OK">
	
  </form>
	
	
	<p align="center"> <a href="profiloUtente.php">Profilo<a/> | <a href="index.php">Home<a/></p>
	 
</body>
</html>