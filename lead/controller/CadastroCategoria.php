<?php
	require("../model/ClasseCategoria.php");
	
    $p = $_POST;
    $categoria = new  Categoria();
    $resultado=$categoria -> inserir($p['nome'],$p['descricao']);	
	if($resultado=='sucesso')
	{
	echo "Cadastro realizado com sucesso";
?>
<script>
setTimeout("window.location='../view/cadastros.php",2000);
</script>
<?php
	}
	else
	{
		echo "categoria cadastrada!";
	}
?>