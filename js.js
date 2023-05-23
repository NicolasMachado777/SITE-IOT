var header = document.getElementById("navbar")
var open = 0

function navbar() {
    header.classList.toggle("corheader",scrollY > 0)
}

window.addEventListener('scroll',navbar)


function subir() {
    let teste = document.getElementById("teste")
    teste.style.height="0px"
}


function openbar() {
   let sidebar = document.getElementById("sidebar")
   let navigation = document.getElementById("navigation-cell")


   if (open == 0) {
    navigation.style.height="200px";
    open = 1
    sidebar.src="img/close.svg"
   } else {
    navigation.style.height="0px";
    open = 0
    sidebar.src="img/icons8-menu.svg"
   }     
    
}

function respostacerta() {
    let resposta = document.getElementById("nicolas");
    var respostas = document.getElementsByClassName("resposta");
    resposta.style.backgroundColor="green";
    for (let i = 1; i < 4; i++) {
        respostas[i].style.backgroundColor="red";
    }

}

function passarpergunta() {
    let next = document.getElementById("next")
    let questoes = document.getElementsByClassName("questoes")
    for (let i = 0; i < 2; i++) {
        questoes[i].style.display="none";
        questoes[i+1].style.display="flex";
        
    }
}
