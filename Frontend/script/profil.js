actual_password = document.getElementById('actual_password')
new_password = document.getElementById('new_password')
verify_new_password = document.getElementById('verify_new_password')

new_password.addEventListener("input", function(){
    if (new_password.value===""){
        new_password.style.borderColor='red';
    } else {
        new_password.style.borderColor='green';
    }
})

verify_new_password.addEventListener("input", function(){
    if (verify_new_password.value==="" || verify_new_password.value!==new_password.value ){
        verify_new_password.style.borderColor='red';
    } else {
        verify_new_password.style.borderColor='green';
    }
})

document.getElementById('eye_actual_password').addEventListener("click", function() {
    if (actual_password.type === "password"){
        actual_password.type = "text";
        this.src = "../assets/open_eye.png"
    } else {
        actual_password.type = "password";
        this.src = "../assets/close_eye.png"
    }
});

document.getElementById('eye_new_password').addEventListener("click", function() {
    if (new_password.type === "password"){
        new_password.type = "text";
        this.src = "../assets/open_eye.png"

    } else {
        new_password.type = "password";
        this.src = "../assets/close_eye.png"
    }
});

document.getElementById('eye_verify_new_password').addEventListener("click", function() {
    if (verify_new_password.type === "password"){
        verify_new_password.type = "text";
        this.src = "../assets/open_eye.png"

    } else {
        verify_new_password.type = "password";
        this.src = "../assets/close_eye.png"
    }
});