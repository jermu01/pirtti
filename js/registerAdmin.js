
document.forms['register'].addEventListener('submit', registerNewUser); //add method on submit button

function registerNewUser(event){

    event.preventDefault(); //stop form from submitting

    //input fields from register form
    const username = document.forms['register']['username'].value;
    const password = document.forms['register']['password'].value;
    const email = document.forms['register']['email'].value;

    //requirements

    //username cannot be null
    if (username.length <= 0) {
        showMessage('error', 'Käyttäjänimi ei voi olla tyhjä'); //display message
        return;
    }
    //password have to be at least 4 letter
    if (password.length <= 4) {
        showMessage('error', 'Salasana on oltava pidempi kuin 4 kirjainta'); //display message
        return;
    }

    //email have to be longer than 4 letters
    if (email.length <= 4) {
        showMessage('error', 'Sähköpostin on oltava pidempi kuin 4 kirjainta'); //display message
        return;
    }

    //ajax request
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "login.php?type=success&msg=Rekisteröinti onnistui!! Voit kirjautua sisään uusilla tunniksillasi!"; //control you in selected page & display message
        } else {
            showMessage('error', data.error);
        }
    }

    //send data
    ajax.open("POST", "../backend/registerNewAdmin.php", true); //included SQL-database script
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password+"&email="+email); //fields from form what u want to send
}