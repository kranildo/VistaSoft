<form action="https://0ti.com.br/teste/public/" method="POST" id="fomulario">
    <input type="hidden" id="paginas" name="paginas">
</form>
<ul class="nav nav-pills">
    <li class="nav-item">
        <a class="nav-link active" aria-current="page" onclick="carregaPagina('inicial')">Home</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button" aria-expanded="false">Cadastros</a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" onclick="carregaPagina('locatarios')">Locatário</a></li>
            <li><a class="dropdown-item" onclick="carregaPagina('locadores')">Locador</a></li>
            <li><a class="dropdown-item" onclick="carregaPagina('imoveis')">Imóveis</a></li>
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" onclick="carregaPagina('contratos')">Contratos</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" onclick="carregaPagina('videos')">Videos</a>
    </li>
</ul>
<script src="js/nav_bar.js"></script>