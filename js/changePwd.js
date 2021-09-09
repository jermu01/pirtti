
document.forms['changePwd'].addEventListener('submit', changePwd);

function changePwd(event){
    event.preventDefault();

    const username = document.forms['changePwd']['username'].value;
    const password = document.forms['changePwd']['password'].value;
    const password2 = document.forms['changePwd']['password2'].value;

    if (password.length <= 4) {
        showMessage('error', 'Password minium lenght is 4 characters');
        return;
    }

    if (password.localeCompare(password2) != 0){
        showMessage('error', 'Password not matching!!');
        return;
    }

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "admin.php?type=success&msg=Salasana vaihdettu!";
            
    } else {
        showMessage('error', data.error);
    }
}

    ajax.open("POST", "backend/changePwd.php", true);
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