
let phone = document.getElementById('phone');
let email = document.getElementById('email');
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
