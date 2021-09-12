<!DOCTYPE html>
<html lang="en">
<head></head>
<body>
<div class="main-content-inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="header-title">Pagamentos Efetuados</h4>
                <form action="?/painel/listar_pagamentose"
                        method="POST">
                    <div class="form-group">
                        <label for="data">Data dos Pagamentos Efetuados</label>
                        <input type="month" name="data" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Pesquisar</button>
                </form>
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</body>
</html>