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

/*__________________________________________________________________________________________*/

const botaoIniciar = document.querySelector(".comecar-quiz")
const perguntasContainer = document.querySelector(".perguntas-container")
const respostasContainer = document.querySelector(".respostas-container")
const questaoTexto = document.querySelector(".questao")
const tudo = document.querySelector(".caixa")
const proximabotao = document.querySelector(".proxima-questao")

botaoIniciar.addEventListener("click", comecarjogo)
proximabotao.addEventListener("click", mostrarProxPergunta)

let questaoAtual = 0
let totalacertos = 0

function comecarjogo(){
    botaoIniciar.classList.add("hide")
    perguntasContainer.classList.remove("hide")
    mostrarProxPergunta()
}

function mostrarProxPergunta(){
    
    resetarquiz()

    if(questions.length === questaoAtual){
        return terminarjogo()
    }

    questaoTexto.textContent = questions[questaoAtual].question
    questions[questaoAtual].answers.forEach(answer => {
        const NovaQuestao = document.createElement("button")
        NovaQuestao.classList.add("resposta", "botao")
        NovaQuestao.textContent = answer.text
        if(answer.correct){
            NovaQuestao.dataset.correto = answer.correct
        }
        respostasContainer.appendChild(NovaQuestao)

        NovaQuestao.addEventListener("click", questaoselecionada)
    })
}

function resetarquiz(){
    while(respostasContainer.firstChild){
        respostasContainer.removeChild(respostasContainer.firstChild)
    }

    proximabotao.classList.add("hide")

}

function questaoselecionada(event){
    const questaoclicada = event.target

    if(questaoclicada.dataset.correto){
       /* tudo.classList.add("correto")*/
        totalacertos++
    }else{
        /*tudo.classList.add("incorreto")*/

    }

    document.querySelectorAll(".resposta").forEach(button =>{
        if(button.dataset.correto){
            button.classList.add("correto")

        }else{
            button.classList.add("incorreto")

        }

    })

    proximabotao.classList.remove("hide")
    questaoAtual++
}

function terminarjogo(){
    const totalquestoes = questions.length
    const performance = Math.floor(totalacertos * 100 / totalquestoes)

    let mensagem = ""

    switch (true) {
        case performance >= 90:
            mensagem = "Excelente :)"
            break;
        case performance >= 70:
            mensagem = "Muito bom :)"
            break;
        case performance >= 50:
            mensagem = "Bom :)"
            break;
        default:
            mensagem = "Da pra melhorar :("
            break;
    }

    perguntasContainer.innerHTML = ` <p class = "mensagem-final"> Você acertou ${totalacertos} de ${totalquestoes} questões!
    <span>Resultado: ${mensagem}</span> </p> <button onclick= window.location.reload() class="botao"> Refazer teste </button>`
}















const questions = [
    {
      question: "O joao é chato?",
      answers: [
        { text: "Não", correct: false },
        { text: "Nunca", correct: false },
        { text: "Sim", correct: true },
        { text: "Jamais", correct: false }
      ]
    },
    {
      question: "Mais esperto da Etec?",
      answers: [
        { text: "Abner", correct: true },
        { text: "Nicolas", correct: false },
        { text: "Davi", correct: false },
        { text: "Matheus", correct: false }
      ]
    },
    {
      question: 'Davi pega mulher casada?',
      answers: [
        { text: 'Sim', correct: true },
        { text: 'Não', correct: false },
        { text: 'Nunca', correct: false },
        { text: "Jamais", correct: false }
      ]
    }
  ]