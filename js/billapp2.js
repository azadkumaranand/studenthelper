
let username = document.getElementById('username');
let email = document.getElementById('email');
let phone = document.getElementById('phone');
let confirm_password = document.getElementById('confirm_password');
let password = document.getElementById('password');
let str = username.value;
email.addEventListener('blur',()=>{
    let regex = /202[0-9][a-z]{0,3}[0-9]{0,4}@mnit.ac.in/;
    let str = email.value;
    if(regex.test(str)){
        email.classList.remove('is-invalid');
    }
    else{
        email.classList.add('is-invalid');
    }
})
phone.addEventListener('blur',()=>{
    let regex = /[0-9]{10}/;
    let str = phone.value;
    if(regex.test(str)){
        phone.classList.remove('is-invalid');
    }
    else{
        phone.classList.add('is-invalid');
    }
})
password.addEventListener('blur',()=>{
    let regex = /[a-z]@[0-9]/;
    let str = password.value;
    if(str.match(regex)){
        password.classList.remove('is-invalid');
    }
    else{
        password.classList.add('is-invalid');
    }
})
confirm_password.addEventListener('blur',()=>{
    let str = password.value;
    let str2 =  confirm_password.value;
    // hashIt(str2);
    if(str == str2){
        confirm_password.classList.remove('is-invalid');
    }
    else{
        confirm_password.classList.add('is-invalid');
    }
})
