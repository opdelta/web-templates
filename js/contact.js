function validerFormulaire() {

    var animalValid = validateAnimal("Animalname","animal-error");
    var typeValid = validateType("type","type-error");
    var raceValid = validateRace("race","race-error");
    var ageValid = validateAge("age","age-error");
    var emailValid = validateEmail("email","email-error");
    var civicValid = validateCivic("civic","civic-error");
    var cityValid = validateCity("city","city-error");
    var postValid = validatePost("post","post-error");
    var descValid = validateDesc("description","desc-error");

    var validFields = animalValid && typeValid && raceValid && ageValid && emailValid && civicValid && cityValid && postValid && descValid;

    return validFields;
}

function validateAnimal(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field.length < 3 || field.length > 30 || field.includes(",")) {
        document.getElementById(spanId).innerHTML = "Le nom de l'animal doit avoir entre 3 et 20 caractères sans virgules.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}
function validateType(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field.includes(",")) {
        document.getElementById(spanId).innerHTML = "Il doit y avoir un type sans virgules.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}
function validateRace(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field.includes(",")) {
        document.getElementById(spanId).innerHTML = "Il doit y avoir une race sans virgules.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}
function validateAge(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field < 0 || field > 30) {
        document.getElementById(spanId).innerHTML = "L'&acirc;ge doit &ecirc;tre une valeur num&eacute;rique entre 0 et 30.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}

function validateEmail(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (!(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(field))) {
        document.getElementById(spanId).innerHTML = "Le format du courriel est invalide.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}

function validateCivic(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field.includes(",")) {
        document.getElementById(spanId).innerHTML = "L'adresse civique ne peut pas &ecirc;tre vide ou contenir de virgules.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}
function validateCity(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field.includes(",")) {
        document.getElementById(spanId).innerHTML = "La ville ne peut pas &ecirc;tre vide ou contenir de virgules.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}
function validatePost(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    var regex = /^[ABCEGHJKLMNPRSTVXY]{1}\d{1}[A-Z]{1} *\d{1}[A-Z]{1}\d{1}$/;
    if (!(regex.test(field))) {
        document.getElementById(spanId).innerHTML = "Le code postal doit &ecirc;tre du format canadien (H0H 0H0).";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}
function validateDesc(inputId, spanId) {
    var field = document.getElementById(inputId).value;
    if (field == null || field == "" || field.includes(",")) {
        document.getElementById(spanId).innerHTML = "La description ne peut pas &ecirc;tre vide ou contenir de virgules.";
        document.getElementById(spanId).style.color = "red";
        return false;
    }
    return true;
}