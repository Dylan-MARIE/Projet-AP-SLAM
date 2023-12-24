window.onload = function(){
    window.location.href = "#accueil";
};

function validateForm() {
    var response = grecaptcha.getResponse();
    if (response.length == 0) {
        alert("La validation du reCAPTCHA est nécessaire afin de soumettre le formulaire.");
        return false;
    }
    return true;
}