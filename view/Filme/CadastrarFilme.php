<div class="container">
    <form class="row" action="../controller/FilmeController.php" method="post">
        <input type="hidden" name="Metodo" value="Cadastrar">
        <div class="col-2">
            <label for="codigo" class="form-label">
                Código
            </label>
            <input type="number" class="form-control" name="cod" id="cod">
        </div>

        <div class="col-8">
            <label for="nome" class="form-label">Nome do filme</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>

        <div class="col-2">
            <label for="lancamento" class="form-label">Data de Lançamento</label>
            <input type="date" name="lancamento" id="lancamento" class="form-control">
        </div>

        <div class="col-5">
            <label for="atores" class="form-label">Atores</label>
            <input type="text" name="atores" id="atores" class="form-control">
        </div>

        <div class="col-5">
            <label for="diretor" class="form-label"> Diretor</label>
            <input type="text" name="diretor" id="diretor" class="form-control">
        </div>

        <div class="col-12 mt-4">
            <button type="submit" class="btn btn-primary ">Cadastrar Filme</button>
        </div>
    </form>
</div>