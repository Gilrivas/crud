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
    text[0].innerHTML = 'Chercher'
    text[1].innerHTML = 'Ajouter'
    text[2].innerHTML = 'Dossiers'
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
    },300)
    
}

let file = document.getElementById('file')
let show = document.getElementById('show')
let close2 = document.getElementById('close2')
let add = document.getElementById('add')
let addScreen = document.getElementById('addScreen')
let showDel = document.getElementById('showDel')
let del = document.getElementById('delete')
let close3 = document.getElementById('close3')
let modiTout = document.getElementById('modiTout')
let formModiTout = document.getElementById('formModiTout')
let showModify = document.getElementById('showModify')
let modifyBox = document.getElementById('modifyBox')
let modiInter = document.getElementById('modiInter')
let modiEtage = document.getElementById('modiEtage')
let modiDate = document.getElementById('modiDate')
let singleInterForm = document.getElementById('singleInterForm')
let singleEtageForm = document.getElementById('singleEtageForm')
let singleDateForm = document.getElementById('singleDateForm')
let close5 = document.getElementById('close5')
let close6 = document.getElementById('close6')
let close7 = document.getElementById('close7')
let close4 = document.getElementById('close4')

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

display(file, show)
display(add,addScreen)
displayNone(close2, addScreen)
display(showDel, del)
displayNone(close3, del)

display(modiTout, formModiTout)
displayNone(modiTout, modifyBox)

display(showModify, modifyBox)
display(modiInter, singleInterForm)
display(modiEtage, singleEtageForm)
display(modiDate, singleDateForm)

displayNone(modiInter, modifyBox)
displayNone(modiEtage, modifyBox)
displayNone(modiDate, modifyBox)

displayNone(close4, formModiTout)
displayNone(close5, singleInterForm)
displayNone(close6, singleEtageForm)
displayNone(close7, singleDateForm)


let search = document.getElementById('search')
let buttonsSearch = document.getElementById('buttonsSearch')
let searchInter = document.getElementById('searchInter')
let btnSearchInter = document.getElementById('btnSearchInter')
let btnSearchEtage = document.getElementById('btnSearchEtage')
let btnSearchDate = document.getElementById('btnSearchDate')


display(search, buttonsSearch)

