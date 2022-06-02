function cadastrar(novo) {
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let repasse = document.getElementById('repasse').value;
    let data_envio = { rota: 'locadores', metodo: 'cadastrar', nome: nome, email: email, telefone: telefone , repasse: repasse };
    $.post(url+'/public/endpoints.php', data_envio).done(function (response) {
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
    let repasse = document.getElementById('repasse').value;
    let data_envio = { rota: 'locadores', metodo: 'editar', id: id, nome: nome, email: email, telefone: telefone, repasse: repasse };
    $.post(url+'/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message); 
    }); 
}
function buscar() {
    let id = document.getElementById('id').value;
    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let telefone = document.getElementById('telefone').value;
    let data_envio = { rota: 'locadores', metodo: 'buscar', id: id, nome: nome, email: email, telefone: telefone };
    $.post(url+'/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message); 
    });
}
function excluir() {
    let id = document.getElementById('id').value;
    let data_envio = { rota: 'locadores', metodo: 'excluir', id: id};
    $.post(url+'/public/endpoints.php', data_envio).done(function (response) {
        let data = JSON.parse(response);
        alert(data.message);
    });
}