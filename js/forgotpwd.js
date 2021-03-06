
document.forms['forgotpwd'].addEventListener('submit', forgotPassword); //add method on submit button

function forgotPassword(event){
    event.preventDefault(); //stop form from submitting

    const email = document.forms['forgotpwd']['email'].value; //email field from form

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
