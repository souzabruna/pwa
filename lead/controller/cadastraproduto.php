<?php
	require("../model/ClasseProdutos.php");
	
	
    $p = $_POST;
    $produto = new  Produto();
    $resultado=$produto -> inserir($p['codigo'],$p['nome'],$p['categoria'],$p['descricao'],$p['fornecedor'],$p['quantidade'],$p['valor']);	
    echo $resultado;
    die();
	if($resultado=='sucesso')
	{
	echo "Cadastro realizado com sucesso";
?>
<script>
setTimeout("window.location='../view/produtos.php'",2000);
</script>
<?php
	}
	else
	{
		echo "Produto cadastrado!";
	}
?>