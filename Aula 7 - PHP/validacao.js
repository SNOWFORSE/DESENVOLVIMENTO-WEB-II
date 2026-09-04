function validar(){
    var erro = document.getElementById("erro")
    var titulo = document.getElementById("titulo").value;
    var autor = document.getElementById("autor").value;
    var genero = document.getElementById("genero").value;
    var qnt_paginas = document.getElementById("qtd_paginas").value;

    console.log(titulo + " - " + autor + " - " + genero + " - " + qnt_paginas);

    if (titulo.trim() == ''){
        erro.innerHTML = "Informe Título!";
        return false;
    }
    if (autor.trim() == ''){
        erro.innerHTML = "Informe o Autor!";
        return false;
    }
    if (genero.trim() == ''){
        erro.innerHTML = "Informe o Gênero!";
        return false;
    }
    if (qnt_paginas.trim() == ''){
        erro.innerHTML = "Informe a Quantidade de Páginas!";
        return false;
    }
    return true;
}
