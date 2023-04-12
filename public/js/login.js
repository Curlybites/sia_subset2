
const togglePassword = document.querySelector('#eye');
const password = document.querySelector('#password');

togglePassword.onclick = function(){
    if(password.type == "password"){
        password.type = "text";
        togglePassword.innerHTML = "visibility";
    }else {
        password.type = "password";
        togglePassword.innerHTML = "visibility_off";
    }
}

