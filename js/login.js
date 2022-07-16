let password = document.getElementById('password');
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