

<title> Päiväkoti Pirtti | Salasanan vaihto </title>

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

</style>
</head>

<body>

  <div class="container">
  <div class="jumbotron">
  <a href="../admin/admin.php" class="previous">&laquo; Takaisin</a>

  <br><br>

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
        <button type="submit" class="btn btn-primary">Lähetä salasana pyyntö</button>
      </fieldset>
    </form>
</div>


<script >


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
    }
    else if(emailId.value == ""){
        icon.style.display = 'none';
        errorMsg.style.display = 'none';
        emailId.style.border = '2px solid #5fa0fa';
    }
    else{
        icon.innerHTML = '<i class="fas fa-exclamation-circle"></i>';
        icon.style.color = '#ff2851';
        errorMsg.style.display = 'block';
        emailId.style.border = '2px solid #ff2851';
    }

}

</script>


<script type="text/javascript" src="../js/forgotpwd.js"></script>

</body>