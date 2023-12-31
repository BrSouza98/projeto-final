<?php

require_once("DbContext.php");
require_once("C:\laragon\www\classes\Filme.php");

class FilmeContext extends DbContext
{
    public static function ListarFilmes()
    {
        $query = "SELECT * FROM filmes";

        $con = DbContext::DbConnect();

        $filmes = [];


        if ($con) {
            $db = $con->prepare($query);
            $db->execute();
            $db->bind_result($idFilme, $nome, $lancamento, $atores, $diretor);

            while ($db->fetch()) {
                array_push($filmes, new Filme($idFilme, $nome, new DateTime($lancamento), $atores, $diretor));
            }
            $db->close();
        } else {
            return false;
        }

        return $filmes;
    }

    public static function InserirFilme(Filme $filme): bool
    {
        $query = "INSERT INTO `audiovisual`.`filmes`
        (`idFilme`,
        `nome`,
        `lancamento`,
        `atores`,
        `diretor`)
        VALUES
        ('$filme->id',
        '$filme->nome',
        '$filme->lancamento',
        '$filme->atores',
        '$filme->diretor');
        ";

        $con = FilmeContext::DbConnect();

        $db = $con->prepare($query);

        return $db->execute();
    }

    public static function ExcluirFilme(int $id)
    {
        $query = "DELETE FROM `audiovisual`.`filmes`
        WHERE idFilme = $id;
        ";

        $con = FilmeContext::DbConnect();

        $db = $con->prepare($query);

        return $db->execute();
    }
}
