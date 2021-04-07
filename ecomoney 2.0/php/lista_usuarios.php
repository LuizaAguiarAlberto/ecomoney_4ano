<?php
    include "../inc/cabecalho_conexao.inc";
    include "../inc/ini_html.inc";
    include "../inc/menu_adm.inc";

    $SQL = "SELECT * FROM usuarios";

		// Executa o comando SQL
		$dados_recuperados = mysqli_query($con, $SQL);

		if(mysqli_num_rows($dados_recuperados) > 0){
            include "../inc/lista_usuario.inc";
			while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
				
                echo '<tbody>
                        <tr>
							<td>'.$resultado[0].'</td>
							<td>'.$resultado[1].'</td>
							<td>'.$resultado[2].'</td>
                            <td>'.$resultado[3].'</td>
                            <td>'.$resultado[4].'</td>
                            <td>'.$resultado[5].'</td>
							<td><a class="btn btn-danger" href="remover_usuario.php?pront='.$resultado[0].'" role="button">Remover</a></td>
							<td><a class="btn btn-warning" href="editar_usuario.php?pront='.$resultado[0].'" role="button">Editar</a></td>
                        </tr>
                    </tbody>';
			}
            echo '</table>
            </div>';
		}

        mysqli_close($con);
    include "../inc/rodape.inc";
    include "../inc/fim_html.inc";
?>