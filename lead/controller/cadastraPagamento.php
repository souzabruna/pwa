<?php
	require("../model/ClassePagamento.php");
	
    $p = $_POST;
    $pagamento = new Pagamento();
    $resultado=$pagamento -> inserir($p['nome']);	
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
		echo "pagamento cadastrada!";
	}
?>