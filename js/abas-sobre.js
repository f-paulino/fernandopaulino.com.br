var gatilhosAbas = document.querySelectorAll(".gatilho-aba");
for (i=0; i<gatilhosAbas.length; i++) {
    gatilhosAbas[i].addEventListener("click", function(){
        let mira = this.getAttribute("abre-aba");
        let alvo = document.getElementById(mira);
        document.querySelector(".aba-ativa").classList.remove("aba-ativa");
        document.querySelector(".botao-ativo").classList.remove("botao-ativo");
        this.classList.add("botao-ativo");
        alvo.classList.add("aba-ativa");
    })
}

