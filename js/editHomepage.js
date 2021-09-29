
document.forms['textEdit'].addEventListener('submit', editText);

function editText(event) {
    event.preventDefault();

    const text = document.forms['textEdit']['text'].value;

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "../admin.php?type=success&msg=Nettisivu muokattu";
        } else {
            showMessage('error');
        }
    }

    ajax.open("POST", "../../backend/editTextHomepage.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("text="+text);
}
