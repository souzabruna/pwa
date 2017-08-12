<?php
	require("../model/ClasseUsuario.php");
	
    $p = $_POST;
    $usuario = new  Usuario();
    $resultado=$usuario -> inserir($p['nome'],$p['cpf'],$p['email'],$p['senha'],$p['telefone']);	
	if($resultado=='sucesso')
	{
	echo "Cadastro realizado com sucesso";
?>
<script>
setTimeout("window.location='../view/Index.php'",2000);
</script>
<?php
	}
	else
	{
		echo "Usuario ja cadastrado!";
	}
?>