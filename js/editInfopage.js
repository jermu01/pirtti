
document.forms['textEdit'].addEventListener('submit', editText);
document.forms['textEdit2'].addEventListener('submit', editText2);

function editText(event) {
    event.preventDefault();

    const text = tinymce.get("text").getContent();

    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "../admin.php?type=success&msg=Nettisivu muokattu";
        } else {
            showMessage('error');
        }
    }

    ajax.open("POST", "../../backend/editTextInfopage.php", true);
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("text="+text);
}

