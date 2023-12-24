window.onload = function(){
    window.location.href = "#accueil";
};

document.getElementById("contact-form").addEventListener("submit", function(event) {
    var recaptchaResponse = grecaptcha.getResponse();

    if (recaptchaResponse.length === 0) {
        alert("Veuillez valider le reCAPTCHA avant d'envoyer le formulaire.");
        event.preventDefault();
    }
});