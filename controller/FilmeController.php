<?php
require_once("C:\laragon\www\model\FilmeContext.php");
var_dump($_POST);

switch ($_POST["Metodo"]) {
    case 'Cadastrar':
        FilmeContext::InserirFilme(new Filme($_POST["cod"], $_POST["nome"], new DateTime($_POST["lancamento"]), $_POST["atores"], $_POST["diretor"]));  
        break;


    case 'Excluir':
        FilmeContext::ExcluirFilme($_POST["id"]);
    
    default:
         header("Location: http://localhost/Index.php?Pagina=Filme");
        break;
}

header("Location: http://localhost/Index.php?Pagina=Filme");
?>
