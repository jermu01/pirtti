
document.forms['resetpwd'].addEventListener('submit', resetPassword); //add method on submit button

function resetPassword(event){

    event.preventDefault(); //stop form from submitting

    //input fields from resetpwd form
    const email = document.forms['resetpwd']['email'].value;
    const password = document.forms['resetpwd']['password'].value;
    const confirmpwd = document.forms['resetpwd']['confirmpwd'].value;

    //requirements

    //password have to be at least 4 letter
    if (password.length <= 4) {
        showMessage('error', 'Salasanan on oltava pidempikun 4 kirjainta!'); //display message
        return;
    }
    //both password have to be same
    if (password !== confirmpwd || confirmpwd !== password) {
        showMessage('error', 'Salasanat eivät ole samat!'); //display message
        return;
    }

    //ajax request
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "../admin/login.php?type=success&msg=Salasana vaihdettu!!"; //control you in selected page & display message
        } else {
            showMessage('error');
        }

    }

    //send data
    ajax.open("POST", "../backend/resetpwd.php", true); //included SQL-database script
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("email="+email+"&password="+password); //fields from form what u want to send
}

