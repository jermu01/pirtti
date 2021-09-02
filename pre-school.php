<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<title>Päiväkoti Pirtti | Päiväkotihakemus</title>

<head>
<link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
  <script type="text/javascript" src="js/main.js"></script>
</head>

<style>

</style>

<body>

<div class="container">
  <div class="jumbotron">
  <a href="applications.php" class="previous">&laquo; Takaisin</a>
  <br><br>
    <h1>Esiopetushakemus</h1>
    <br>
    <strong><h4>Lapsen henkilötiedot</h4></strong>
    <br>
  <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname" class="form-control" id="firstname" placeholder="firstname">
    <label for="firstname">Etunimet</label>
  </div>
  <div class="form-floating mb-3">
    <input type="lastname" class="form-control" id="lastname" placeholder="lastname">
    <label for="lastname">Sukunimi</label>
  </div>
<div class="form-floating mb-3">
    <input type="human_identity" class="form-control" id="human_identity" placeholder="human_identity">
    <label for="human_identity">Henkilötunnus</label>
  </div>
</div>
  <div class="form-floating mb-3">
    <input type="address" class="form-control" id="address" placeholder="address">
    <label for="address">Kotiosoite, postinumero & postitoimipaikka</label>
  </div>
  <div class="form-floating mb-3">
    <input type="hometown" class="form-control" id="hometown" placeholder="hometown">
    <label for="hometown">Kotikunta</label>
  </div>

  <div class="form-group">
      <label for="language" class="form-label mt-4">Äidinkieli</label>
      <select onchange="otherlanguage(this);" class="form-select" id="language" name="language">
        <option selected disabled>Valitse</option>
        <option value="finnish">Suomi</option>
        <option value="swedish">Ruotsi</option>
        <option value="other">Muu, mikä?</option>
      </select>
      <div id="ifYes" style="display: none;">
      <br>
        <input type="language" class="form-control" id="language" name="language" placeholder="Muu, mikä?"/><br />
      </div>

    <div class="form-group">
      <label for="pets" class="form-label mt-4">Onko kotonasi lemmikkieläimiä:</label>
      <select onchange="havepets(this);" class="form-select" id="pets" name="pets">
        <option selected disabled>Valitse</option>
        <option value="no">Ei</option>
        <option value="yes">On, mikä?</option>
      </select>
      <div id="yes" style="display: none;">
      <br>
        <input type="pets" class="form-control" id="pets" name="pets" placeholder="on, mikä?"/><br />
      </div>

    </div>


    <br><br>


    <strong><h4>Huoltajien henkilötiedot</h4></strong>
    <br>
    <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname" class="form-control" id="firstname" placeholder="firstname">
    <label for="firstname">Etunimet</label>
  </div>
  <div class="form-floating">
    <input type="lastname" class="form-control" id="lastname" placeholder="lastname">
    <label for="lastname">Sukunimi</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="career" class="form-control" id="career" placeholder="career">
    <label for="career">Ammatti</label>
  </div>
  <div class="form-floating mb-3">
    <input type="job" class="form-control" id="job" placeholder="job">
    <label for="job">Nykyinen työ-/opiskelupaikka</label>
  </div>
  <div class="form-floating mb-3">
    <input type="phonenumber" class="form-control" id="phonenumber" placeholder="phonenumber">
    <label for="phonenumber">Puhelinnumero</label>
  </div>
  <div class="form-floating mb-3">
    <input type="jobhours" class="form-control" id="jobhours" placeholder="jobhours">
    <label for="jobhours">Työaika esim. (6:00-18:00) </label>
  </div>
<div class="form-floating mb-3">
    <input type="Email" class="form-control" id="email" placeholder="email">
    <label for="email">Sähköposti</label>
  </div>


  <br><br>


  <strong><h4>Puoliso/avopuoliso</h4></strong>
    <br>
    <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname" class="form-control" id="firstname" placeholder="firstname">
    <label for="firstname">Etunimet</label>
  </div>
  <div class="form-floating">
    <input type="lastname" class="form-control" id="lastname" placeholder="lastname">
    <label for="lastname">Sukunimi</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="career" class="form-control" id="career" placeholder="career">
    <label for="career">Ammatti</label>
  </div>
  <div class="form-floating mb-3">
    <input type="job" class="form-control" id="job" placeholder="job">
    <label for="job">Nykyinen työ-/opiskelupaikka</label>
  </div>
  <div class="form-floating mb-3">
    <input type="phonenumber" class="form-control" id="phonenumber" placeholder="phonenumber">
    <label for="phonenumber">Puhelinnumero</label>
  </div>
  <div class="form-floating mb-3">
    <input type="jobhours" class="form-control" id="jobhours" placeholder="jobhours">
    <label for="jobhours">Työaika esim. (6:00-18:00) </label>
  </div>
<div class="form-floating mb-3">
    <input type="Email" class="form-control" id="email" placeholder="email">
    <label for="email">Sähköposti</label>
  </div>

  <div class="form-group">
      <label for="relationship" class="form-label mt-4">Perhesuhde</label>
      <select onchange="otherguardian(this);" class="form-select" id="relationship" name="relationship">
        <option selected disabled>Valitse</option>
        <option value="single">Naimaton</option>
        <option value="married">Avioliitossa</option>
        <option value="cohabitation">Avoliitossa</option>
        <option value="widow">Leski</option>
        <option value="separated">Asumuserossa</option>
        <option value="divorced">Eronnut</option>
        <option value="other">Muu huoltaja</option>
      </select>
      <div id="other" style="display: none;">
      <br>
        <input type="relationship" class="form-control" id="relationship" name="relationship" placeholder="muu, kuka?"/><br />
      </div>
  </div>


  <br><br>


  <h4>Varhaiskasvatuksen tarve</h4>
  <div class="form-group">
      <label for="needcare" class="form-label mt-4"></label>
      <select class="form-select" id="needcare" name="needcare" placeholder="needcare">
        <option selected disabled>Valitse</option>
        <option value="noteach">Pelkkä esiopetus, ei varhaiskasvatuksen tarvetta</option>
        <option value="yesteach">Esiopetus & enintään 5h/pv varhaiskasvatus</option>
      </select>
    </div>


<br><br>

<h4>Kuljetuksen tarve</h4>
  <div class="form-group">
      <label for="exampleSelect1" class="form-label mt-4"></label>
      <select class="form-select" id="exampleSelect1">
        <option selected disabled>Valitse</option>
        <option value="transport">Lapsi tarvitsee kuljetuksen</option>
        <option vlaue="notransport">Lapsi ei tarvitse kuljetusta</option>
      </select>
    </div>


  <br><br>


  <strong><h4>Perheen muut lapset</h4></strong>
  <div class="form-group">
      <label for="family" class="form-label mt-3">Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:</label>
      <textarea class="form-control" id="family" name="family" rows="5"></textarea>
    </div>
    

  <br><br>


  <strong><h4>Lapsen terveydentila</h4></strong>
    <p>Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:</p>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="yes" id="yes" value="yes">
          Kyllä
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input type="radio" class="form-check-input" name="no" id="no" value="no">
          Ei
        </label>
      </div>


  <br>


    <div class="form-floating mb-3">
    <input type="hospital" class="form-control" id="hospital" placeholder="hospital">
    <label for="hospital">Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite</label>
  </div>


  <br><br>


  <strong><h6>Sairaudet, allergiat, ruokavalio yms.</h6></strong>
    <div class="form-group">
        <label for="allergic" class="form-label mt-1"></label>
        <textarea class="form-control" id="allergic" name="allergic" rows="5"></textarea>
  </div>

  <br>

  <strong><h6>Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?</h6></strong>
    <div class="form-group">
        <label for="hospital2" class="form-label mt-1"></label>
        <textarea class="form-control" id="hospital2" name="hospital2" rows="5"></textarea>
  </div>

  <br>

  <strong><h6>Lisätiedot hakemuksen perusteeksi:</h6></strong>
    <div class="form-group">
        <label for="extrainfo" class="form-label mt-1"></label>
        <textarea class="form-control" id="extrainfo" name="extrainfo" rows="5"></textarea>
  </div>

  <br>

<fieldset class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="checked" id="checked">
      <label class="form-check-label" for="checked">
        Olen tarkistanut tiedot
      </label>
</div>

<br><br>

  <div class="d-grid gap-2">
  <button class="btn btn-lg btn-secondary" type="submit" id="send" name="send">Lähetä</button>
</div>
</div>
<?php include_once 'layout/bot.inc.php'; ?>
</body>

