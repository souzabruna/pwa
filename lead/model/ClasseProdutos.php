<?php
require_once ('ClasseConexao.php');

class Produto
{
	
	private $insere;
	private $result;

	function __construct(){
      $objConnection = new Conexao();
   }


	public function inserir($codigo,$nome,$categoria,$descricao,$fornecedor,$quantidade, $valor)
	{
		
		if (empty($codigo) || empty($nome) || empty($categoria) || empty($descricao) || empty($fornecedor) || empty($quantidade)|| empty($valor))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
       
		$insere= "insert into produto(codigo,nome,id_categoria,descricao,fornecedor,quantidade,valor) values ('$codigo','$nome','$categoria','$descricao','$fornecedor','$quantidade','$valor')";
	
		echo $insere;
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
	public function mostrar_porcategoria()
	{
		$mostrar="select nome from produto ";
		$resultado=mysql_query($mostrar);
		return $resultado;
	}
	public function Calcular(){
		$mostrar="select valor from produto where codigo=code";
		$resultado=mysql_query($mostrar);
		return $resultado;
	}

}