document.getElementById('form-field').onsubmit = function() {
    // call by name input
    var x = document.forms('form-field')['Uname'].value;
    var y = document.forms('form-field')['email'].value;
    var z = document.forms('form-field')['msg'].value;


    // 
    var submit = true;
    if (x == null || x == "") {
        nameError = "Mohon masukkan nama anda";
        document.getElementById('error').innerHTML = nameError;
        submit = false;
    }

    if (y == null || y == "") {
        emailError = "Mohon masukkan email anda";
        document.getElementById('error').innerHTML = emailError;
        submit = false;
    }

    if (z == null || y == "") {
        msgError = "Masukkan pesan anda!";
        document.getElementById('error').innerHTML = msgError;
        submit = false;
    }

    return submit;
}

function hapusAlert() {
    document.getElementById(this.id + "_error").innerHTML = "";
}

document.getElementById('Uname').onkeyup = hapusAlert;
document.getElementById('email').onkeyup = hapusAlert;
document.getElementById('msg').onkeyup = hapusAlert;