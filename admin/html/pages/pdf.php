<?php
	$autoload = "/var/www/12HD/vendor/autoload.php";
	$conArq = "/var/www/12HD/admin/libs/conexao/db.php";	
	if (file_exists($autoload) && file_exists($conArq)) {
		require_once "/var/www/12HD/vendor/autoload.php";
		require_once "/var/www/12HD/admin/libs/conexao/db.php";
		
		$resultado = ConexaoBD("localhost", "root", "123456", "MelhorIdadeSA", "Select * from ResponsavelIdoso;");
		if (mysqli_num_rows($resultado)<1){
			echo "Nenhum Registro</br>";
			echo '<a href="/12HD/admin/html/layout.php">Voltar</a>';
		}else{
			$html = '<style>
				table, th, td {
				    border: 1px solid black;
				}	
				</style>
					<table>
						<thead>
							<tr>
								<th>Responsavel</th>
								<th>CPF Reponsavel</th>
								<th>E-mail</th>
								<th>Telefone</th>
								<th>Idoso</th>
								<th>CPF Idoso</th>
							</tr>
						</thead>
						<tbody>';	
			while($linha = mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
				$html .= '<tr>
								<td>'. $linha['ResponsavelNome'] .'</td>
								<td>'. $linha['ResponsavelCPF'] .'</td>
								<td>'. $linha['ResponsavelEmail'] .'</td>
								<td>'. $linha['ResponsavelDDD']. '-' .$linha['ResponsavelTelefone'] .'</td>
								<td>'. $linha['IdosoNome'] .'</td>
								<td>'. $linha['IdosoCPF'] .'</td>
							</tr>';
			}
	
			$html .=	'
					</tbody>
				</table>';
		
			$mpdf = new mPDF('c','A4-L');
			$mpdf->WriteHTML($html);
			$mpdf->Output();
		}
	}
	if(!file_exists($autoload)){
		echo "Vendor nao configurado</br>";	
	}
	if(!file_exists($conArq)){
		echo "Arquivo de conexao com BD nao localizado</br>";	
	}
?>
