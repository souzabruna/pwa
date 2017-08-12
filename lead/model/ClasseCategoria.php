<?php
require_once ('ClasseConexao.php');

class Categoria
{
	
	private $insere;
	private $result;
	//private $mostrar;
	//private $resultado;

	function __construct(){
      $objConnection = new Conexao();
   }


	public function inserir($nome,$descricao)
	{
		
		if (empty($nome) || empty($descricao))
        {
            echo "Volte e preencha todos os campos";
            return false;
        }
       
		$insere= "insert into Categoria(nome,descricao) values ('$nome','$descricao')";
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
	public function mostrar_categoria()
	{
		$mostrar="select * from categoria ORDER BY nome ASC;";
		$resultado=mysql_query($mostrar);
		return $resultado;
	}
}