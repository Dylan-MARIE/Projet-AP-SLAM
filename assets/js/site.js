window.onload = function(){
    window.location.href = "#accueil";
};

document.getElementById("envoyerBtn").addEventListener("click", function(event) {
    event.preventDefault();

    var recaptchaResponse = grecaptcha.getResponse();

    if (recaptchaResponse.length === 0) {
        alert("Veuillez valider le reCAPTCHA avant d'envoyer le formulaire.");
    } else {
        document.getElementById("contact-form").submit();
    }
});