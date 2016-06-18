<?php
session_start();
require_once $_SERVER["DOCUMENT_ROOT"]."/admin/libs/conexao/db.php";

if(isset($_SESSION["CpfResponsavel"])){
	//echo $_SESSION["CpfResponsavel"];
	if(isset($_POST['BTCadastrarIdoso'])){

	function Cad_Idoso($nome,$cpf,$cpfresponsavel){

		//echo($nome."_".$endereco."_".$cpf."_".$email."_".$telefone);
		$Cadastro_Status_Erro = "Ouve um erro ao inserir os dados no sistema, por favor contate o administrador.";
		$Cadastro_Status_Ok = "Idoso cadastrado com sucesso...";

		//Valida se os  dados vindos no formulario
		$ValidaForm = Valida_Cad_Idoso($nome,$cpf);
		//var_dump($ValidaForm);
		if(count($ValidaForm) == 0){

			
		$query = "UPDATE `MelhorIdadeSA`.`ResponsavelIdoso`";
		$query.= "SET `IdosoCPF` = '$cpf', `IdosoNome` = '$nome'";
		$query.= "WHERE `ResponsavelIdoso`.`ResponsavelCPF` = $cpfresponsavel;";
		//echo ($query);
		$conexao = ConexaoBD("localhost","root","123456","MelhorIdadeSA",$query);

		unset($_SESSION["CpfResponsavel"]);
		echo "<h1>Dados enviados</h1>";
		return $Cadastro_Status_Ok;
		
		}else{

		echo "<h1>Favor validar as informacoes abaixo:</h1>";
		printf(implode(" <br>",$ValidaForm));
		echo "<p> <a href=\"cad_idoso.php\">Voltar</a> </p>";
		die();
		};
	}
	function Valida_Cad_Idoso($nome,$cpf){

	$CestaErros = array();

	if (is_null($nome) || strlen($nome) == 0 || !is_string(trim($nome))) {
		array_push($CestaErros,"Por favor informar o nome do responsavel");
	}
	if (is_null($cpf) || strlen($cpf) == 0 || !is_string(trim($cpf))) {
		array_push($CestaErros,"Por favor informar o cpf do responsavel");
	}
	return $CestaErros;
	}	

	//Variaveis de POST, Alterar somente se necessário 
	//====================================================
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	//====================================================

	$CadResp = Cad_Idoso($nome,$cpf,$_SESSION["CpfResponsavel"]);
	echo "<h5>$CadResp</h5>";
	echo "<p><a href=\"../../../portal/index.php\">Voltar</a> ao inicio.</p>";
	}else{

?>	

<h1>Cadastro do Idoso</h1>
	<h5>Preencha os dados abaixo para cadastrar o idosos</h5>
	<form action="<?php $PHP_SELF; ?>" method="POST"> 
		<p> 
			Nome:<br /> 
			<input type="text" size="30" name="nome"> 
		</p>
		<p> 
			Cpf:<br /> 
			<input type="text" size="20" name="cpf">		
		</p>
		<p>
			<input type="submit" name="BTCadastrarIdoso" value="Cadastrar">
		</p>

<?php
	}
}else{
	echo "Voce deve cadastrar um responsavel antes de inserir um idoso.";
	echo "<p> Clique em <a href=\"cad_responsavel.php\">continuar</a> para cadastrar um responsavel.</p>";
};
?>