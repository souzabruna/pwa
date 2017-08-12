<?php
	require("../model/ClasseVenda.php");
	
    $p = $_POST;
    $usuario = new  Venda();
    $resultado=$venda -> inserir($p['vendedor'],$p['Fpagamento'],$p['valorvenda']);	
	if($resultado=='sucesso')
	{
	echo "Venda realizada com sucesso";
?>
<script>
setTimeout("window.location='../view/notafiscal.php'",2000);
</script>
<?php
	}
	
?>