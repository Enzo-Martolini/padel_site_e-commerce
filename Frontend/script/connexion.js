document.getElementById('register').addEventListener("click", function(){
    window.location.href="register.php"
})

var mail = document.getElementById("mail_form");
var password = document.getElementById("password_form");

function validateForm(event) {
    var isValid = true;

    // Vérifiez si le mail est valide
    if (mail.value !== "" && !/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/.test(mail.value)){
        document.getElementById("error_mail").textContent = "Le mail doit être correct";
        mail.style.borderColor = "red";
        isValid = false;
    } else if (mail.value === "") {
        isValid = false;
    } else {
        document.getElementById("error_mail").textContent = "";
        mail.style.borderColor = "006D77";
    }

    // Vérifiez si le mot de passe a plus de 6 caractères
    if (password.value !== "" && password.value.length <= 6){
        password.style.borderColor = "red";
        document.getElementById("error_password").textContent = "Le mot de passe doit faire plus de 6 caractères";
        isValid = false;
    } else if (password.value === "") {
        isValid = false;
    } else {
        document.getElementById("error_password").textContent = "";
        password.style.borderColor = "006D77";
    }

    // Si le formulaire n'est pas valide, annule la soumission du formulaire
    if (!isValid && event) {
        event.preventDefault();
    }
}

document.getElementById('login_form').addEventListener('submit', validateForm);
document.addEventListener("click", validateForm);
