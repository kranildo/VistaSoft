function cadastrar(novo) {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let data_envio = { rota: 'locatarios', metodo: 'cadastrar', nome: nome, email: email, telefone: telefone };
    $.post('https://0ti.com.br/teste/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message);
        if (novo) {
            document.location.reload(true); 
        } else {
            document.getElementById('paginas').value = "inicial";
            document.getElementById('fomulario').submit();
        }
    });
}
function editar() {
    let id = document.getElementById('id').value;
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let data_envio = { rota: 'locatarios', metodo: 'editar', id: id, nome: nome, email: email, telefone: telefone };
    $.post('https://0ti.com.br/teste/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message); 
    }); 
}
function buscar() {
    let id = document.getElementById('id').value;
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let data_envio = { rota: 'locatarios', metodo: 'buscar', id: id, nome: nome, email: email, telefone: telefone };
    $.post('https://0ti.com.br/teste/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message); 
    });
}
function excluir() {
    let id = document.getElementById('id').value;
    let data_envio = { rota: 'locatarios', metodo: 'excluir', id: id };
    $.post('https://0ti.com.br/teste/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message);
    });
}