<?php include_once 'layout/top.inc.php'; ?>
<?php include_once 'layout/nav.inc.php'; ?>

<title>Päiväkoti Pirtti | Varhaiskasvatushakemus</title>

<head>
<link rel="stylesheet" href="https://bootswatch.com/5/minty/bootstrap.css">
  <link rel="stylesheet" href="css/styles.css">
</head>



<body>


<div class="container">
  <div class="jumbotron">
  <a href="applications.php" class="previous">&laquo; Takaisin</a>

  <br><br>
  
  <form name="kinderGarten">
    <fieldset>
    <h1>Varhaiskasvatushakemus</h1>
    <br>
    <strong><h4>Lapsen henkilötiedot</h4></strong>
    <br>
  <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname" class="form-control to-db" id="firstname" placeholder="firstname">
    <label for="firstname">Etunimet</label>
  </div>
  <div class="form-floating">
    <input type="lastname" class="form-control to-db" id="lastname" placeholder="lastname">
    <label for="lastname">Sukunimi</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="identity" class="form-control to-db" id="identity" placeholder="identity">
    <label for="identity">Henkilötunnus</label>
  </div>
  <div class="form-floating">
    <input type="address" class="form-control to-db" id="address" placeholder="address">
    <label for="address">Kotiosoite</label>
  </div>

      <div class="form-group">
      <label for="language" class="form-label mt-4">Äidinkieli</label>
      <select onchange="otherlanguage(this);" class="form-select s-choice" id="language" name="language">
        <option selected disabled>Valitse</option>
        <option value="finnish">Suomi</option>
        <option value="swedish">Ruotsi</option>
        <option value="other">Muu, mikä? Kirjoita alle</option>
      </select>
      <div id="ifYes" style="display: none;">
      <br>
        <input type="language" class="form-control to-db" id="language" name="language" placeholder="mikä?"/><br />
      </div>


      <div class="form-group">
      <label for="pets" class="form-label mt-4">Onko kotonasi lemmikkieläimiä:</label>
      <select onchange="havepets(this);" class="form-select s-choice" id="pets" name="pets">
        <option selected disabled>Valitse</option>
        <option value="no">Ei</option>
        <option value="yes">On, mikä?</option>
      </select>
      <div id="yes" style="display: none;">
      <br>
        <input type="pets" class="form-control to-db" id="pets" name="pets" placeholder="mikä?"/><br />
      </div>
    </div>



    <br><br>


    <strong><h4>Huoltajien henkilötiedot</h4></strong>
    <br>
    <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname2" class="form-control to-db" id="firstname2" placeholder="firstname2">
    <label for="firstname2">Etunimet</label>
  </div>
  <div class="form-floating">
    <input type="lastname2" class="form-control to-db" id="lastname2" placeholder="lastname2">
    <label for="lastname2">Sukunimi</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="career" class="form-control to-db" id="career" placeholder="career">
    <label for="career">Ammatti</label>
  </div>
  <div class="form-floating mb-3">
    <input type="job" class="form-control to-db" id="job" placeholder="job">
    <label for="job">Nykyinen työ-/opiskelupaikka</label>
  </div>
  <div class="form-floating mb-3">
    <input type="phonenumber" class="form-control to-db" id="phonenumber" placeholder="phonenumber">
    <label for="phonenumber">Puhelinnumero</label>
  </div>
  <div class="form-floating mb-3">
    <input type="jobhours" class="form-control to-db" id="jobhours" placeholder="jobhours">
    <label for="jobhours">Työaika esim. (6:00-18:00) </label>
  </div>
<div class="form-floating mb-3">
    <input type="email" class="form-control to-db" id="email" placeholder="email">
    <label for="email">Sähköposti</label>
  </div>


  <br><br>


    <strong><h4>Puoliso/avopuoliso</h4></strong>
    <br>
    <div class="form-group">
  <div class="form-floating mb-3">
    <input type="firstname3" class="form-control to-db" id="firstname3" placeholder="firstname3">
    <label for="firstname3">Etunimet</label>
  </div>
  <div class="form-floating">
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
    <input type="phonenumber2" class="form-control to-db" id="phonenumber2" placeholder="phonenumber2">
    <label for="phonenumber2">Puhelinnumero</label>
  </div>
  <div class="form-floating mb-3">
    <input type="jobhours2" class="form-control to-db" id="jobhours2" placeholder="jobhours2">
    <label for="jobhours2">Työaika esim. (6:00-18:00) </label>
  </div>
<div class="form-floating mb-3">
    <input type="Email2" class="form-control to-db" id="email2" placeholder="email2">
    <label for="email2">Sähköposti</label>
  </div>

    <div class="form-group">
      <label for="relationship" class="form-label mt-4">Perhesuhde</label>
      <select onchange="otherguardian(this);" class="form-select s-choice" id="relationship" name="relationship">
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
        <input type="relationship" class="form-control to-db" id="relationship" name="relationship" placeholder="muu, kuka?"/><br />
      </div>
  </div>


  <br><br>


  <h4>Toivottu päivähoitomuoto</h4>
  <div class="form-group">
      <label for="daycare" class="form-label mt-4"></label>
      <select class="form-select s-choice" id="daycare" name="daycare">
        <option selected disabled>Valitse</option>
        <option value="fullday">Kokopäivähoito</option>
        <option value="15pv">Max 15pv/kk</option>
        <option value="10pv">Max 10pv/kk</option>
      </select>
    </div>


<br><br>


<strong><h4>Toivottu hoitoaika</h4></strong>
    <br>
  <div class="form-group">
  <div class="form-floating mb-3">
  <input type="startdate" class="form-control to-db" id="startdate" placeholder="startdate">
    <label for="startdate">Hoidon tarpeen alkamispäivä ( pv. kk . v )</label>
  </div>
  <div class="form-floating">
    <input type="dayscount" class="form-control to-db" id="dayscount" placeholder="dayscount">
    <label for="dayscount">Hoitopäivien lukumäärä/kk</label>
  </div>
</div>
<div class="form-floating mb-3">
    <input type="dailycare" class="form-control to-db" id="dailycare" placeholder="dailycare">
    <label for="dailycare">Päivittäinen hoitoaika</label>
  </div>


  <br><br>


  <strong><h4>Perheen muut lapset</h4></strong>
  <div class="form-group">
      <label for="familychildrens" class="form-label mt-3">Kotona asuvien alle 18-vuotiaiden lasten nimet, syntymäajat sekä alle kouluikäisten päivähoitopaikat:</label>
      <textarea class="form-control t-area" id="familychildrens" rows="5"></textarea>
    </div>
    

  <br><br>


  <strong><h4>Lapsen terveydentila</h4></strong>
  <br>
    <div class="form-group">
      <label for="becontacted" class="form-label mt-4">Saako tarvittaessa olla yhteydessä päivähoidon eri yhteistyötahojen (kuten neuvolan) kanssa lapsen kehitystä ja terveyttä koskevissa asioissa:</label>
      <select class="form-select s-choice" id="becontacted" name="becontacted">
        <option selected disabled>Valitse</option>
        <option value="yes">Kyllä</option>
        <option value="no">Ei</option>
      </select>
    </div>
  </div>


  <br>


    <div class="form-floating mb-3">
    <input type="hospital" class="form-control to-db" id="hospital" placeholder="hospital">
    <label for="hospital">Mitä lastenneuvolaa olette viimeksi käyttänyt, osoite</label>
  </div>


  <br><br>


  <strong><h6>Sairaudet, allergiat, ruokavalio yms.</h6></strong>
    <div class="form-group">
        <label for="allergic" class="form-label mt-1"></label>
        <textarea class="form-control t-area" id="allergic" rows="5"></textarea>
  </div>

  <br>

  <strong><h6>Onko lapsi ollut sairaalahoidossa tai jatkuvassa lääkärinhoidossa, milloin ja miksi?</h6></strong>
    <div class="form-group">
        <label for="hospital2" class="form-label mt-1"></label>
        <textarea class="form-control t-area" id="hospital2" rows="5"></textarea>
  </div>

  <br>

  <strong><h6>Lisätiedot hakemuksen perusteeksi:</h6></strong>
    <div class="form-group">
        <label for="extrainfo" class="form-label mt-1"></label>
        <textarea class="form-control t-area" id="extrainfo" rows="5"></textarea>
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
  
  <button type="submit" class="btn btn-lg btn-secondary">Lähetä</button>

  </fieldset>
</form>

</div>
</div>

<script type="text/javascript" src="js/kindergarten.js"></script>
<script type="text/javascript" src="js/main.js"></script>

</body>

<?php include_once 'layout/bot.inc.php'; ?>