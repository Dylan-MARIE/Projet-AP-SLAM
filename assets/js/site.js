window.onload = function(){
    window.location.href = "#accueil";
};

function validateForm() {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
        alert("Veuillez valider le reCAPTCHA avant d'envoyer le formulaire.");
        return false;
    }
    return true;
}