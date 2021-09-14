
document.forms['resetpwd'].addEventListener('submit', resetPassword);

function resetPassword(event){

    event.preventDefault();

    const email = document.forms['resetpwd']['email'].value;
    const password = document.forms['resetpwd']['password'].value;
    const confirmpwd = document.forms['resetpwd']['confirmpwd'].value;


    if (password.length <= 4) {
        showMessage('error', 'Password minium lenght is 4 characters');
        return;
    }

    if (password !== confirmpwd || confirmpwd !== password) {
        showMessage('error', 'Password minium lenght is 4 characters');
        return;
    }


    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "../admin/login.php?type=success&msg=Salasana vaihdettu!!";
        } else {
            showMessage('error');
        }

    }

    ajax.open("POST", "../backend/resetpwd.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("email="+email+"&password="+password);
}

