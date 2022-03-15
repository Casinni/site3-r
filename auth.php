<?php

	//$login=$_POST['login'];
	$login= $_REQUEST['login'];
    //$pwd=$_POST['pwd'];
	$pwd= $_REQUEST['pwd'];
	if($login=="admin" && $pwd=="titi"){

	   header('Location: admin.php?login='.$login);
		 
	}
	else if ($login=="jvaljean" && $pwd=="toto"){
		
		  header('Location: accueil.php?login='.$login);
	
	}
	else{ 
	//header('Location: compte.html');
	header('Location: compte.php?error=authentification');
	}
?>
	
	