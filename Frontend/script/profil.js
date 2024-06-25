new_password = document.getElementById('new_password')
verify_new_password = document.getElementById('verify_new_password')

document.addEventListener("input", function(){
    console.log("atteint l'ecouteur devenement")
    if (new_password.value !== "" && verify_new_password.value !== "" && new_password.value !== verify_new_password.value){
        new_password.style.borderColor = "red";    
        verify_new_password.style.borderColor = "red";    
    }
})