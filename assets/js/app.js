let eye = document.getElementById('eye');
let eye2 = document.getElementById('eye2');
let password = document.getElementById('password');

eye.addEventListener('click', ()=>{
    eye.classList.add('none');
    eye2.classList.remove('none');
    password.type = "text";
})

eye2.addEventListener('click', ()=>{
    eye2.classList.add('none');
    eye.classList.remove('none');
    password.type = "password";
})
