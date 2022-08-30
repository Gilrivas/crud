let open = document.getElementById('open');
let sideB = document.getElementById('sideB');
let close = document.getElementById('close');

open.addEventListener('click', ()=>{
    sideB.classList.add('open');
    open.classList.add('none')
    close.classList.remove('none')
    change()
    setTimeout(()=>{
        sideB.classList.remove('open')
        sideB.style.width = '400px'
    },500)
})

close.addEventListener('click', ()=>{
    sideB.classList.add('close');
    close.classList.add('none')
    open.classList.remove('none')
    change2()
    setTimeout(()=>{
        sideB.classList.remove('close')
        sideB.style.width = '70px'
    },500)
})

let icons = document.getElementsByClassName('icons')
let bts = document.getElementsByClassName('bts')
let text = document.getElementsByClassName('text')
let logIcon = document.getElementById('logIcon')
let logText = document.getElementById('logText')

function change() {
   setTimeout(()=>{
    for (let i = 0; i < icons.length; i++) {
        icons[i].classList.add('none')
    }
    logIcon.classList.add('none')

    logText.innerHTML = 'Se déconnecter'
    text[0].innerHTML = 'Home'
    text[1].innerHTML = 'Dossiers'
    text[2].innerHTML = 'Chercher'
    text[3].innerHTML = 'Ajouter'
   }, 200)
    
}
function change2() {
    setTimeout(()=>{
        for (let i = 0; i < icons.length; i++) {
            icons[i].classList.remove('none')
        }
        logIcon.classList.remove('none')
    
        logText.innerHTML = ''
        text[0].innerHTML = ''
        text[1].innerHTML = ''
        text[2].innerHTML = ''
        text[3].innerHTML = ''
    },300)
    
}


function display(element, element2){
    element.addEventListener('click', ()=>{
        element2.classList.remove('none')
    })
}
function displayNone(element, element2){
    element.addEventListener('click', ()=>{
        element2.classList.add('none')
    })
}

display(add,addScreen)
displayNone(close2, addScreen)


let searchInter = document.getElementById('searchInter')
let searchEtage = document.getElementById('searchEtage')
let searchDate = document.getElementById('searchDate')
let btnSearchInter = document.getElementById('btnSearchInter')
let btnSearchEtage = document.getElementById('btnSearchEtage')
let btnSearchDate = document.getElementById('btnSearchDate')



display(btnSearchInter, searchInter)
display(btnSearchEtage, searchEtage)
display(btnSearchDate, searchDate)

function closeOthers(element, dis1, dis2){
    element.addEventListener('click', ()=>{
        dis1.classList.add('none')
        dis2.classList.add('none')
    })
}

closeOthers(btnSearchInter, searchEtage,searchDate)
closeOthers(btnSearchEtage, searchInter,searchDate)
closeOthers(btnSearchDate, searchInter,searchEtage)



