<?php
require_once("C:\laragon\www\model\FilmeContext.php");

$listaFilmes = FilmeContext::ListarFilmes();

?>

<table class="table">
        <thead>
            <th scope="col">
                Id
            </th scope="col">

            <th scope="col">
                Nome
            </th scope="col">

            <th scope="col">
                Lançamento
            </th scope="col">

            <th scope="col">
                Atores
            </th scope="col">

            <th scope="col">
                Diretor
            </th>

            <th>

            </th>
        </thead>

        <tbody>
            <?php
            foreach ($listaFilmes as $key => $filme) {
                echo 
                ("
                    <tr>
                        <th scope='row'>
                        $filme->id 
                        </th>

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

                        <td>
                            <form action='http://localhost/controller/FilmeController.php' method='post'>
                                <input type='hidden' name='Metodo' value='Excluir'>
                                <input type='hidden' name='id' value='$filme->id'>
                                <button type='submit' class='btn btn-danger'>Excluir</button>
                            </form>
                        </td>
                     </tr>
                ");
            }
            ?>
        </tbody>
</table>

