

function pesquisar(){
    const botaoPesquisar = document.getElementById('area-pesquisar');
    const form = document.getElementById('form-pesquisa');
    botaoPesquisar.addEventListener('click', function(e){
        form.submit();
    });
}




