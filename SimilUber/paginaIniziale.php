<html>
<head>
    <title> Pagina iniziale dopo aver effettuato l'accesso </title>
</head>
<body background="a.png" align="center" >
	<?php
	session_start();
	?>	
	<h2> <p align="center"> Welcome! </p></h2> 
	
	<br>
	<br>
	<br>
	<p align="center"> 
	<?php
	
	$email = $_SESSION['email'];
	
	echo "visualizza il tuo <a href='profiloUtente.php'>profilo</a>";
	
	?>	
	<a href='queryFatte.php?email=".$email."'></a>
	<p/>
	<br>
	<br>
	<br>
	<form method="GET" name="chiedi" action="queryFatte.php" id="accesso"> 
	<p align="center"> 
	

	</p>
	
	<p align="center"> <input id="ok" value="INTERROGA" type="submit" name="OK"></p>
	
	</form> 	
	<br>
	<br>
	<br>	
	<p align="center"> <a href="logout.php">Logout<a/></p>
	
	

</body>
</html>