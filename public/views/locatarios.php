<h3>Cadastrado de Locatários</h3>
<form class="row justify-content-md-center">
    <input type="hidden" id="id">
    <div class="row form-cadastro">
        <div class="card">
            <div class="card-body">
                <div class="col-md-12">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="telefone">
                    </div>
                </div>
            </div>
            <div class="card-footer d-flex flex-row-reverse">
                <button type="button" class="btn btn-success" onclick="cadastrar(true)"><small>Salvar e Cadastrar Outro</small></button>
                <button type="button" class="btn btn-primary" onclick="cadastrar(false)">Cadastrar</button>
                <button type="clear" class="btn btn-danger">Limpar</button>
            </div>
        </div>
    </div>
</form>

<script src="js/locatarios.js"></script>
<link rel="stylesheet" href="css/locatarios.css">