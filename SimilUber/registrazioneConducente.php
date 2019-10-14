<html>
<head>
    <title>registrazione alla piattaforma </title>
	<meta name="GENERATOR" content="Evrsoft First Page">
</head>
<body style="background-color:lightblue">
	<?php
	session_start();
	?>
	<h1><p align="center"> Inserisci i dati richiesti per registrarti </p> </h1>
	
	<form  method="post" name="registra" action="controlloRegistrazioneConducente.php" id="accesso">
    <table>
		<tr>
		<td>Username</td>

        <td><input id="username" name="username" required> </td>
      </tr>
		<tr>
        <td>Password</td>

        <td><input id="password" name="password" required> </td>
      </tr>	  
		<tr>
	   
        <td>Indirizzio e-mail</td>

        <td><input id="email" name="email" required> </td>
      </tr>
		<tr>
        <td>Nome</td>

        <td><input id="nome" name="nome" required></td>
      </tr>
	  
		<tr>
        <td>Cognome</td>

        <td><input id="cognome" name="cognome" required></td>
      </tr>
	  
		<tr>
        <td>Data Nascita (aaaa-mm-gg) </td>

        <td> <input id="data_nascita" name="data_nascita" required> </td>
      </tr>
		
		<tr>
		    <td> Citta residenza </td>
		    <td><input id="citta_residenza" name="citta_residenza" required></td>
		 
		      
  		</tr>
		<tr>
		    <td> Via residenza </td>
		    <td><input id="via_residenza" name="via_residenza" required></td>
		 
		      
  		</tr>
		<tr>
		    <td> Numero civico </td>
		    <td><input id="numero_civico" name="numero_civico" required></td>
		</tr>
		<tr>
		    <td> Modalità di pagamento </td>
		    <td><input id="modalita_pagamento" name="modalita_pagamento" required></td>
		 
		      
  		</tr>
		<tr>
		    <td> Numero patente </td>
		    <td><input id="numero_patente" name="numero_patente" required></td>
		 
		
    </table> <br>
	
	<input id="ok" value="REGISTRA" type="submit" name="OK">
	
  </form>
	
	
	<p align="center"> <a href="index.php">Home<a/></p>
	 
</body>
</html>