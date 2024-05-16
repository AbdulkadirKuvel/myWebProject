function checkEmpty() {
    var user = document.getElementById("username");
    var pass = document.getElementById("password");
    if (user.value === "" || pass.value === "") {
        alert("Lütfen İstenilen Bilgileri Verin");
    }
    else {

    }
}

function checkAll() {
    var fname = document.getElementById("first name");
    var lname = document.getElementById("last name");
    var maleR = document.getElementById("male");
    var femaleR = document.getElementById("female");
    var birthD = document.getElementById("birth");
    if (
        fname.value == "" || lname.value == "" ||
        (!maleR.checked && !femaleR.checked) ||
        birthD.value == ""
    ) {
        alert("Lütfen Kişisel Bilgileri Boş Geçmeyiniz.")
    }
}
