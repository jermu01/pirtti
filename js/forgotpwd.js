
document.forms['forgotpwd'].addEventListener('submit', forgotPassword); //add method on submit button

function forgotPassword(event){
    event.preventDefault(); //stop form from submitting

    const email = document.forms['forgotpwd']['email'].value; //email field from form

    if (email.length <= 4) {
        showMessage('error', 'Sähköpostin on oltava vähintään 4 kirjainta'); //email have to be longer than 4 letters
        return;
    }

    //ajax request
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "pwdforgot.php?type=success&msg=Sähköpostiisi on lähetetty salasanan vaihtamislinkki"; //control you in selected page & display message
        } else {
            window.location.href = "pwdforgot.php?type=error&msg=Tapahtui virhe"; //control you in selected page & display message
        }
    }

    //send data
    ajax.open("POST", "../backend/forgotpwd.php", true); //included SQL-database script
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("email="+email); //fields from form what u want to send
}

