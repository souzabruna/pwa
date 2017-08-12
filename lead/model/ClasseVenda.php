<?php
require_once ('ClasseConexao.php');

class Venda
{
	
	private $insere;
	private $result;

	function __construct(){
      $objConnection = new Conexao();
   }


	public function inserir($vendedor,$Fpagamento,$valorvenda)
	{
		
		if (empty($codigo) || empty($vendedor) || empty($Fpagamento) || empty($valorvenda))
        {
            echo "não podemos realizar a venda, formulario incompleto";
            return false;
        }
       
		$insere= "insert into venda(codigo,vendedor,Fpagamento,valorvenda) values ('$codigo','$vendedor','$Fpagamento','$valorvenda')";
		$result=mysql_query($insere);
   
		if($result)
		{
			return "sucesso";
		}
		else
		{
			mysql_error();
		}
	} 

}