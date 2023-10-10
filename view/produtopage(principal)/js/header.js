function menuShow() {
    const menuMobile = document.getElementById("menuMostrar");
    const dropdownMostrar = document.querySelectorAll('.nav-item-mobile');

    dropdownMostrar.style.display = "block";
}


/*FUNÇÃO DE PESQUISAR*/
function pesquisar(){
    const botaoPesquisar = document.getElementById('area-pesquisar');
    const form = document.getElementById('form-pesquisa');
    botaoPesquisar.addEventListener('click', function(e){
        form.submit();
    });
}

/*REDIRECIONANDO AO INDEX*/
function voltarIndex(){
    const botaoVoltar = document.getElementById("menu-inicio");
    botaoVoltar.addEventListener('click', function(e){
        window.location.href = '../../index.php';
    });
}




