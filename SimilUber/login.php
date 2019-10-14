<html>
<head>
    <title>login alla piattaforma</title>
</head>
<body style="background-color:lightblue">
	<?php
	session_start();
	?>
	<h1><p align="center"> Inserisci la tua email e la tua password per accedere </p> </h1>
	<form  method="post" name="Accedi" action="controlloLogin.php" id="accesso">
    <table>
	 <tr>
        <td>Indirizzio e-mail</td>

        <td><input id="email" name="email" required> </td>
      </tr>
	  
      <tr>
        <td>Password</td>

        <td><input id="password" name="password" required> </td>
      </tr>
	  
	  
    </table> 
	<br>
	
	<input id="ok" value="ACCEDI" type="submit" name="OK">
	
  </form>
	
	
	<p align="center"><a href="index.php">Home<a/></p>
	
	

</body>
</html>