
document.forms['login'].addEventListener('submit', loginUsers );

function loginUsers(event){
    event.preventDefault();
    const username = document.forms['login']['username'].value;
    const password = document.forms['login']['password'].value;

    if (username.length <= 0) {
        showMessage('error', 'Username is required');
        return;
    }

    if (password.length <= 4) {
        showMessage('error', 'Password minium lenght is 4 characters');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "admin.php?type=success&msg=Welcome!";
            return;
        } else {
            showMessage('error', 'Kirjautuminen epäonnistui!');
        }
    }

    ajax.open("POST", "../backend/loginUser.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("username="+username+"&password="+password);
}

function showMessage(type, msg){

    let msgBox = document.getElementById("msg");

    if (type== 'success') {
        msgBox.classList.remove('alert-danger');
        msgBox.classList.add('alert-success');
    } else if(type == 'error') {
        msgBox.classList.remove('alert-success');
        msgBox.classList.add('alert-danger');
    }

    msgBox.querySelector('p').innerHTML = msg;
    msgBox.classList.remove('d-none');
}