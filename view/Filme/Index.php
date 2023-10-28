<?php
require_once("C:\laragon\www\model\FilmeContext.php");

$listaFilmes = FilmeContext::ListarFilmes();

?>

<table>
        <thead>
            <th>
                Id
            </th>

            <th>
                Nome
            </th>

            <th>
                Lançamento
            </th>

            <th>
                Atores
            </th>

            <th>
                Diretor
            </th>
        </thead>

        <tbody>
            <?php
            foreach ($listaFilmes as $key => $filme) {
                echo 
                ("
                    <tr>
                        <td>
                        $filme->id 
                        </td>

                        <td>
                        $filme->nome
                        </td>

                        <td>
                        $filme->lancamento
                        </td>

                        <td>
                        $filme->atores
                        </td>

                        <td>
                        $filme->diretor
                        </td>
                     </tr>
                ");
            }
            ?>
        </tbody>
</table>

