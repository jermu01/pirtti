
document.forms['login'].addEventListener('submit', loginUsers ); //add method on submit button

function loginUsers(event){
    event.preventDefault(); //stop form from submitting

    //input fields from login form
    const username = document.forms['login']['username'].value; 
    const password = document.forms['login']['password'].value;

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

    //ajax request
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "admin.php?type=success&msg=Tervetuloa!"; //control you in selected page & display message
            return;
        } else {
            showMessage('error', 'Kirjautuminen epäonnistui, tarkista käyttäjänimi ja salasana!'); //control you in selected page & display message
        }
    }

    //send data
    ajax.open("POST", "../backend/loginUser.php", true); //included SQL-database script
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password); //fields from form what u want to send
}