document.getElementById('login').addEventListener("click", function(){
    window.location.href = "login.php";
})

var mail = document.getElementById("mail_form");
var password = document.getElementById("password_form");
var name_form = document.getElementById("name_form");
var surname = document.getElementById("surname_form");
console.log("fonction atteinte")

document.addEventListener("click", function(event){
    var isValid = true;

    console.log("fonction atteinte")

    //Vérifie si le nom et prenom sont correcte
    if (name_form.value !== "" && !/^[a-zA-Z\s]*$/.test(name_form.value)){
        document.getElementById("error_name").textContent = "Le prenom entré ne doit pas contenir de carctères spéciaux ou d'accents";
        name_form.style.borderColor = "red";
        isValid = false
    }
    
    if (surname.value !== "" && !/^[a-zA-Z\s]*$/.test(surname.value)){
        document.getElementById("error_surname").textContent = "Le nom entré ne doit pas contenir de carctères spéciaux ou d'accents";
        surname.style.borderColor = "red";
        isValid = false

    }
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

});    

// document.getElementById('login_form').addEventListener('submit', validateForm);
