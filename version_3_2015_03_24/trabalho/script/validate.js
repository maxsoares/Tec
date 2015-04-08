function validateForm() {
    var userField = document.forms["myForm"]["user"].value;
    var pwdField = document.forms["myForm"]["password"].value;

    if (userField == null || userField == "") {
        alert("Campo usuario obrigatório.");
        return false;
    } else if (pwdField == null || pwdField == "") {
        alert("Campo senha obrigatório.");
        return false;
    } else {
        alert("Login realizado com sucesso!");
        return false;
    }

}