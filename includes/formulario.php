<main>
    <section>
        <a href="index.php">
            <button class="btn btn-primary">Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="POST">

        <div class="form-group">
            <label>Titulo:</label>
            <input type="text" class="form-control" name="titulo" value="<?=$objVaga->titulo?>">
        </div>

        <div class="form-group">
            <label>Descrição:</label>
            <textarea class="form-control" name="descricao" rows="5"><?=$objVaga->descricao?></textarea>
        </div>

        <div class="form-group">
            <label>Status:</label>
            <div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="s" checked> Ativo
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <label class="form-control">
                        <input type="radio" name="ativo" value="n" <?=$objVaga->ativo == 'n' ? 'checked' : ''?>> Inativo
                    </label>
                </div>
            </div>
        </div>

        <!--<div class="form-group">
            <label>Titulo:</label>
            <input type="text" class="form-control" name="titulo">
        </div>-->

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>

    </form>

</main>