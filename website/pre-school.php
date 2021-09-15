<?php include_once '../layout/top.inc.php'; ?>

<title>Päiväkoti Pirtti | Esikouluhakemus</title>


<style>

.container {
  margin: auto;
  max-width: 900px;
}


p {
  color: red;
}

</style>

<body>

<div class="container">
  <div class="jumbotron">
  <a href="applications.php" class="previous">&laquo; Takaisin</a>
  <br><br>
  <form name="preSchool">
    <fieldset>
    <h1>Esiopetushakemus</h1>
    <br>
    <p>HUOM! * merkityt on pakollisia tietoja!</p>
    <br>
    <strong><h4>Lapsen henkilötiedot</h4></strong>
    <br>
  <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname" class="form-control to-db" id="firstname" placeholder="firstname" required>
    <label for="firstname">Etunimet*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="lastname" class="form-control to-db" id="lastname" placeholder="lastname" required>
    <label for="lastname">Sukunimi*</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="identity" class="form-control to-db" id="identity" placeholder="identity" required>
    <label for="identity">Henkilötunnus*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="address" class="form-control to-db" id="address" placeholder="address" required>
    <label for="address">Kotiosoite*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="language" class="form-control to-db" id="language" placeholder="language" required>
    <label for="language">Äidinkieli*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="pets" class="form-control to-db" id="pets" placeholder="pets">
    <label for="pets">Lemmikkieläimet</label>
  </div>


    <br><br>


    <strong><h4>Huoltajien henkilötiedot</h4></strong>
    <br>
    <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname2" class="form-control to-db" id="firstname2" placeholder="firstname2" required>
    <label for="firstname2">Etunimet*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="lastname2" class="form-control to-db" id="lastname2" placeholder="lastname2" required>
    <label for="lastname2">Sukunimi*</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="career" class="form-control to-db" id="career" placeholder="career" required>
    <label for="career">Ammatti*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="job" class="form-control to-db" id="job" placeholder="job" required>
    <label for="job">Nykyinen työ-/opiskelupaikka*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="parentphonenumber" class="form-control to-db" id="parentphonenumber" placeholder="parentphonenumber" required>
    <label for="parentphonenumber">Puhelinnumero*</label>
  </div>
  <div class="form-floating mb-3">
    <input type="jobhours" class="form-control to-db" id="jobhours" placeholder="jobhours" required>
    <label for="jobhours">Työaika esim. (6:00-18:00)*</label>
  </div>
<div class="form-floating mb-3">
    <input type="parentemail" class="form-control to-db" id="parentemail" placeholder="parentemail" required>
    <label for="parentemail">Sähköposti*</label>
  </div>


  <br><br>


    <strong><h4>Puoliso/avopuoliso</h4></strong>
    <br>
    <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname3" class="form-control to-db" id="firstname3" placeholder="firstname3">
    <label for="firstname3">Etunimet</label>
  </div>
  <div class="form-floating mb-3">
    <input type="lastname3" class="form-control to-db" id="lastname3" placeholder="lastname3">
    <label for="lastname3">Sukunimi</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="career2" class="form-control to-db" id="career2" placeholder="career2">
    <label for="career2">Ammatti</label>
  </div>
  <div class="form-floating mb-3">
    <input type="job2" class="form-control to-db" id="job2" placeholder="job2">
    <label for="job2">Nykyinen työ-/opiskelupaikka</label>
  </div>
  <div class="form-floating mb-3">
    <input type="parentphonenumber2" class="form-control to-db" id="parentphonenumber2" placeholder="parentphonenumber2">
    <label for="parentphonenumber2">Puhelinnumero</label>
  </div>
  <div class="form-floating mb-3">
    <input type="jobhours2" class="form-control to-db" id="jobhours2" placeholder="jobhours2">
    <label for="jobhours2">Työaika esim. (6:00-18:00) </label>
  </div>
  <div class="form-floating mb-3">
    <input type="parentemail2" class="form-control to-db" id="parentemail2" placeholder="parentemail2">
    <label for="parentemail2">Sähköposti</label>
  </div>


    <br><br>


  <h4>Vanhempiensuhde</h4>
  <br>
  <div class="form-floating mb-3">
    <input type="relationship" class="form-control to-db" id="relationship" placeholder="relationship" required>
    <label for="relationship">Perhesuhde (avioliitossa/eronnut jne.)*</label>
  </div>


  <br><br>


  <h4>Varhaiskasvatuksen tarve</h4>
  <div class="form-group">
      <label for="needcare" class="form-label mt-4"></label>
      <select class="form-select" id="needcare" name="needcare" placeholder="needcare" required>
        <option value="" selected disabled>Valitse</option>
        <option value="Pelkkä esiopetus, ei varhaiskasvatuksen tarvetta">Pelkkä esiopetus, ei varhaiskasvatuksen tarvetta</option>
        <option value="Esiopetus & enintään 5h/pv varhaiskasvatus">Esiopetus & enintään 5h/pv varhaiskasvatus</option>
      </select>
    </div>


<br><br>

<h4>Kuljetuksen tarve</h4>
  <div class="form-group">
      <label for="transport" class="form-label mt-4"></label>
      <select class="form-select" id="transport" name="transport" required>
        <option value="" selected disabled>Valitse</option>
        <option value="kyllä">Lapsi tarvitsee kuljetuksen</option>
        <option vlaue="ei">Lapsi ei tarvitse kuljetusta</option>
      </select>
    </div>


  <br><br>


  <strong><h4>Perheen muut lapset</h4></strong>
  <div class="form-group">
      <label for="familychildrens" class="form-label mt-3">Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:*</label>
      <textarea class="form-control t-area" id="familychildrens" rows="5" required></textarea>
    </div>
    

  <br><br>


  <strong><h4>Lapsen terveydentila</h4></strong>
  <br>
    <div class="form-group">
      <label for="becontacted" class="form-label mt-4">Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:</label>
      <select class="form-select s-choice" id="becontacted" name="becontacted" required>
        <option value="" selected disabled>Valitse*</option>
        <option value="kyllä">Kyllä</option>
        <option value="ei">Ei</option>
      </select>
    </div>


  <br>


  <div class="form-floating mb-3">
    <input type="hospital" class="form-control to-db" id="hospital" placeholder="hospital" required>
    <label for="hospital">Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite*</label>
  </div>


  <br><br>


  <strong><h6>Sairaudet, allergiat, ruokavalio yms.*</h6></strong>
    <div class="form-group">
        <label for="allergic" class="form-label mt-1"></label>
        <textarea class="form-control t-area" id="allergic" rows="5" required></textarea>
  </div>

  <br>

  <strong><h6>Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?*</h6></strong>
    <div class="form-group">
        <label for="hospital2" class="form-label mt-1"></label>
        <textarea class="form-control t-area" id="hospital2" rows="5" required></textarea>
  </div>

  <br>

  <strong><h6>Lisätiedot hakemuksen perusteeksi:</h6></strong>
    <div class="form-group">
        <label for="extrainfo" class="form-label mt-1"></label>
        <textarea class="form-control t-area" id="extrainfo" rows="5"></textarea>
  </div>

  <br>
  
  <button type="submit" class="btn btn-lg btn-secondary">Lähetä</button>

  </fieldset>
</form>

</div>
</div>

<script type="text/javascript" src="../js/pre-school.js"></script>

</body>

<?php include_once '../layout/bot.inc.php'; ?>

