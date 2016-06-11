<?php

require_once $_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/conexao/db.php";
//echo($_SERVER["DOCUMENT_ROOT"]."/12HD/admin/libs/conexao/db.php");

$nome = NULL;
$cpf = NULL;
$endereco = NULL;
$email = NULL;
$telefone = NULL;

//Verifica se o formulario foi enviado
if(isset($_POST['BTCadastrarResp'])){

	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone']; 
	//====================================================

	$CadResp = Cad_Responsavel($nome,$endereco,$cpf,$email,$telefone);
	echo "<h5>$CadResp</h5>";

}else{
	?>
	<h1>Cadastro de Responsavel</h1>
	<h5>Preencha os dados abaixo para cadastrar um responsavel por idosos</h5>
	<form action="<? $PHP_SELF; ?>" method="POST"> 
		<p> 
			Nome:<br /> 
			<input type="text" size="30" name="nome"> 
		</p>
		<p> 
			Cpf:<br /> 
			<input type="text" size="20" name="cpf">		
		</p>  
		<p> 
			Endereco:<br /> 
			<input type="text" size="50" name="endereco">		
		</p> 
		<p> 
			Email:<br /> 
			<input type="text" size="50" name="email">		
		</p>  
		<p> 
			Telefone:<br /> 
			<input type="text" size="35" name="telefone"> 
		</p>     
		<p>
			<input type="submit" name="BTCadastrarResp" value="Cadastrar">
		</p>

		<?php
	};

	//Funcao cadastra responsavel
	function Cad_Responsavel($nome,$endereco,$cpf,$email,$telefone){

		//echo($nome."_".$endereco."_".$cpf."_".$email."_".$telefone);

		$Cadastro_Status_Erro = "Ouve um erro ao inserir os dados no sistema, por favor contate o administrador.";
		$Cadastro_Status_Ok = "Seus dados foram cadastrados com sucesso...";

		//Valida se os  dados vindos no formulario
		$ValidaForm = Valida_Cad_Resposavel($nome,$endereco,$cpf,$email,$telefone);
		//var_dump($ValidaForm);
		$gambi1 = rand(1000,5000);
		$gambi2 = rand(5001,9999);
		if(count($ValidaForm) == 0){
		$query = "INSERT INTO `MelhorIdadeSA`.`ResponsavelIdoso` ";
		$query.= "(`Id`, `ResponsavelCPF`, `ResponsavelNome`, `ResponsavelEmail`, ";
		$query.= "`ResponsavelTelefone`, `ResponsavelDDD`,`IdosoCPF`,`IdosoNome`) ";
		$query.= "VALUES (NULL, '$cpf', '$nome', '$email', ";
		$query.= "'$telefone', '11',$gambi1,$gambi2);";
		//echo ($query);
		$conexao = ConexaoBD("localhost","root","123456","MelhorIdadeSA",$query);

		echo "<h1>Dados enviados</h1>";
		return $Cadastro_Status_Ok;

		}else{

		echo "<h1>Favor validar as informacoes abaixo:</h1>";
		printf(implode(" <br>",$ValidaForm));
		die();
		
		};
};

function Valida_Cad_Resposavel($nome,$endereco,$cpf,$email,$telefone){

	$CestaErros = array();

	if (is_null($nome) || strlen($nome) == 0 || !is_string(trim($nome))) {
		array_push($CestaErros,"Por favor informar o nome do responsavel");
	}
	if (is_null($endereco) || strlen($endereco) == 0 || !is_string(trim($endereco))) {
		array_push($CestaErros,"Por favor informar o endereco do responsavel");
	}
	if (is_null($cpf) || strlen($cpf) == 0 || !is_string(trim($cpf))) {
		array_push($CestaErros,"Por favor informar o cpf do responsavel");
	}
	if (is_null($email) || strlen($email) == 0 || !is_string(trim($email))) {
		array_push($CestaErros,"Por favor informar o email do responsavel");
	}
	if (is_null($telefone) || strlen($telefone) == 0 || !is_string(trim($telefone))) {
		array_push($CestaErros,"Por favor informar o telefone do responsavel");
	}
	return $CestaErros;
}

?>
