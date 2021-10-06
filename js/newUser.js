
document.forms['register'].addEventListener('submit', registerNewUser); //add method on submit button

function registerNewUser(event){

    event.preventDefault(); //stop form from submitting

    //input fields from register form
    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const confirmpwd = document.forms['register']['confirmpwd'].value;
    const email = document.forms['register']['email'].value;

    //requirements

    //username cannot be null
    if (username.length <= 0) {
        showMessage('error', 'Käyttäjänimi ei voi olla tyhjä'); //display message
        return;
    }

    //password cannot be null
    if (password.length <= 0) {
        showMessage('error', 'Täytä salasana'); //display message
        return;
    }

    //password have to be at least 4 letter
    if (password.length <= 4) {
        showMessage('error', 'Salasana on oltava pidempi kuin 4 kirjainta'); //display message
        return;
    }

    //confirmpwd cannot be null
    if (confirmpwd.length <= 0) {
        showMessage('error', 'Täytä salasanan vahvistus'); //display message
        return;
    }

    //confirmpwd have to be at least 4 letter
    if (confirmpwd.length <= 4) {
        showMessage('error', 'Salasanan vahvistus on oltava pidempi kuin 4 kirjainta'); //display message
        return;
    }

    //both password have to be same
    if (password !== confirmpwd || confirmpwd !== password) {
        showMessage('error', 'Salasanat eivät ole samat!'); //display message
        return;
    }

    //email cannot be null
    if (email.length <= 0) {
        showMessage('error', 'Sähköposti puuttuu'); //display message
        return;
    }

    //ajax request
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "admin.php?type=success&msg=Uudet tunnukset luotu!"; //control you in selected page & display message
        } else {
            showMessage('error', data.error);
        }
    }

    //send data
    ajax.open("POST", "../backend/newUserAdmin.php", true); //included SQL-database script
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password+"&email="+email); //fields from form what u want to send
}