<?php
	require("../model/ClasseFornecedor.php");
	
    $p = $_POST;
    $fornecedor = new  Fornecedor();
    $resultado= $fornecedor -> inserir($p['nome'],$p['cnpj'],$p['endereco'],$p['email'],$p['telefone']);	
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
		echo "fornecedor cadastrado!";
	}
?>