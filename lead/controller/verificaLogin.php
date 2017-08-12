<?php
	require("/../model/ClasseUsuario.php");
	
    $logar = new Usuario();
    $result= $logar -> VerificaLogin($_POST['email'],$_POST['senha']);
	
	if($result =='sucesso')
	{
			header("Location:../view/inicio.php");
	}
?>