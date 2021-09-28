
document.forms['forgotpwd'].addEventListener('submit', forgotPassword);

function forgotPassword(event){
    event.preventDefault();
    const email = document.forms['forgotpwd']['email'].value;

    if (email.length <= 4) {
        showMessage('error', 'Email minium lenght is 4 characters');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            showMessage('success&msg=Hakemuksesi on lähetetty')
        } else {
            showMessage('error');
        }

    }

    ajax.open("POST", "../backend/forgotpwd.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("email="+email);
}

