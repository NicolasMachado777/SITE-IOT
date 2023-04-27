var header = document.getElementById("navbar")


function navbar() {
    header.classList.toggle("corheader",scrollY > 0)
}

window.addEventListener('scroll',navbar)


function subir() {
    let teste = document.getElementById("teste")
    teste.style.height="0px"
}

function openbar() {
    let icon = document.getElementById("navbar")
        icon.style.backgroundColor="red"
    
}