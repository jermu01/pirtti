
<title> Päiväkoti Pirtti | Salasanan vaihto </title>

<!-- Password forget. Request new password with email -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/minty/bootstrap.min.css" integrity="sha384-H4X+4tKc7b8s4GoMrylmy2ssQYpDHoqzPa9aKXbDwPoPUA3Ra8PA5dGzijN+ePnH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<style>
body {
    background-image: url(../img/bg.jpg);
}

.container {
    max-width: 700px;
    margin: auto;
    align-items:center;
    justify-content: center;

    position:absolute;
    right: 0;
    left: 0;
    top: 70px;
    bottom: 0;
    margin: auto;
}

#error-msg{
    font-family: 'Poppins',sans-serif;
}
label{
    display: inline-block;
    font-weight: 500;
    margin-bottom: 10px;
}
input[type="email"]{
    display: inline-block;
    border: 2px solid #d1d3d4;
    width: 88%;
    height: 50px;
    border-radius: 5px;
    outline: none;
    letter-spacing: 0.5px;
    font-weight: 400;
}
#icon{
    float: right;
    height: 50px;
    position: relative;
    font-size: 25px;
    padding-top: 10px;
}
#error-msg{
    display: none;
    color: #ff2851;
    font-size: 14px;
    margin-top: 10px;
}

#button {
    display: none;
}

</style>

<body>

  <div class="container">
  <div class="jumbotron">
  <a href="../admin/admin.php" class="previous">&laquo; Takaisin</a>

  <br><br>

    <!-- display message -->
    <div id="msg" class="alert alert-dismissible alert-warning d-none">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4 class="alert-heading"></h4>
    <p class="mb-0"></a></p>
    </div>

    <!-- forgotpwd form -->
    <form name="forgotpwd">
      <fieldset>
        <legend>Anna Sähköpostisi</legend>
          <div class="form-group">
          <label for="email">Saat sähköpostiin linkin uudesta salasanasta</label>
          <input name="email" type="email" id="email-id" oninput="checker()" class="form-control" placeholder="Sähköposti">
          <br>
          <div id="icon"></div>
          <p id="error-msg">Anna kelvollinen sähköpostiosoite</p>
        </div>
        <div id="button">
        <button type="submit" class="btn btn-primary">Lähetä salasana pyyntö</button>
      </fieldset>
    </form>
</div>


<script>

//email checker if email is valid
let emailId = document.getElementById("email-id");
let errorMsg = document.getElementById("error-msg");
let icon = document.getElementById("icon");
let mailRegex = /^[a-zA-Z][a-zA-Z0-9\-\_\.]+@[a-zA-Z0-9]{2,}\.[a-zA-Z0-9]{2,}$/;

function checker(){
    icon.style.display="inline-block";
    if(emailId.value.match(mailRegex)){
        icon.innerHTML = '<i class="fas fa-check-circle"></i>';
        icon.style.color = '#2ecc71';
        errorMsg.style.display = 'none';
        emailId.style.border = '2px solid #2ecc71';
        button.style.display = 'block';
    }
    else if(emailId.value == ""){
        icon.style.display = 'none';
        errorMsg.style.display = 'none';
        emailId.style.border = '2px solid #5fa0fa';
        button.style.display = 'none';
    }
    else{
        icon.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
        icon.style.color = '#ff2851';
        errorMsg.style.display = 'block';
        emailId.style.border = '2px solid #ff2851';
        button.style.display = 'none';
    }

}

</script>

<!-- Javascript scripts -->
<script type="text/javascript" src="../js/forgotpwd.js"></script>
<script type="text/javascript" src="../js/common.js"></script>

</body>