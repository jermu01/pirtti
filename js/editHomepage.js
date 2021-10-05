
document.forms['textEdit'].addEventListener('submit', editText); //add method on submit button

function editText(event) {
    event.preventDefault(); //stop form from submitting

    const text = tinymce.get("text").getContent(); //takes all information from editor

    //ajax request
    let ajax = new XMLHttpRequest();
    ajax.onload = function(){
        const data = JSON.parse(this.responseText);
        if (data.hasOwnProperty('success')) {
            window.location.href = "../admin.php?type=success&msg=Nettisivu muokattu"; //control you in selected page & display message
        } else {
            showMessage('error');
        }
    }

    //send data
    ajax.open("POST", "../../backend/editTextHomepage.php", true); //included SQL-database script
    ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    ajax.send("text="+text); //fields from form what u want to send
}
