
document.forms['kinderGarten'].addEventListener('submit', infoApplication);


function infoApplication(event){

    event.preventDefault();

    const firstname = document.forms['kinderGarten']['firstname'].value;
    const lastname  = document.forms['kinderGarten']['lastname'].value;
    const identity = document.forms['kinderGarten']['identity'].value;
    const address = document.forms['kinderGarten']['address'].value;

    const language = document.forms['kinderGarten']['language'].value;
    const pets = document.forms['kinderGarten']['pets'].value;

    const firstname2 = document.forms['kinderGarten']['firstname2'].value;
    const lastname2  = document.forms['kinderGarten']['lastname2'].value;
    const career = document.forms['kinderGarten']['career'].value;
    const job = document.forms['kinderGarten']['job'].value;
    const parentphonenumber = document.forms['kinderGarten']['parentphonenumber'].value;
    const jobhours = document.forms['kinderGarten']['jobhours'].value;
    const parentemail = document.forms['kinderGarten']['parentemail'].value;

    const firstname3 = document.forms['kinderGarten']['firstname3'].value;
    const lastname3  = document.forms['kinderGarten']['lastname3'].value;
    const career2 = document.forms['kinderGarten']['career2'].value;
    const job2 = document.forms['kinderGarten']['job2'].value;
    const parentphonenumber2 = document.forms['kinderGarten']['parentphonenumber2'].value;
    const jobhours2 = document.forms['kinderGarten']['jobhours2'].value;
    const parentemail2 = document.forms['kinderGarten']['parentemail2'].value;

    const relationship = document.forms['kinderGarten']['relationship'].value;
    
    const daycare = document.forms['kinderGarten']['daycare'].value;
    const startdate = document.forms['kinderGarten']['startdate'].value;
    const dayscount = document.forms['kinderGarten']['dayscount'].value;
    const dailycare = document.forms['kinderGarten']['dailycare'].value;
    const familychildrens = document.forms['kinderGarten']['familychildrens'].value;
    const becontacted = document.forms['kinderGarten']['becontacted'].value;
    const hospital = document.forms['kinderGarten']['hospital'].value;
    const allergic = document.forms['kinderGarten']['allergic'].value;
    const hospital2 = document.forms['kinderGarten']['hospital2'].value;
    const extrainfo = document.forms['kinderGarten']['extrainfo'].value;


        let ajax = new XMLHttpRequest();
        ajax.onload = function(){
            const data = JSON.parse(this.responseText);
            if (data.hasOwnProperty('success')) {
                window.location.href = "doneApplication.php?type=Hakemus otettu vastaan!";
            } else {
                showMessage('error');
            }
    
        }
    
        ajax.open("POST", "backend/kindergartenApplication.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("firstname="+firstname+"&lastname="+lastname+"&identity="+identity+"&address="+address+"&language="+language+"&pets="+pets+"&firstname2="+firstname2+"&lastname2="+lastname2+"&career="+career+"&job="+job+"&parentphonenumber="+parentphonenumber+"&jobhours="+jobhours+"&parentemail="+parentemail+"&firstname3="+firstname3+"&lastname3="+lastname3+"&career2="+career2+"&job2="+job2+"&parentphonenumber2="+parentphonenumber2+"&jobhours2="+jobhours2+"&parentemail2="+parentemail2+"&relationship="+relationship+"&daycare="+daycare+"&startdate="+startdate+"&dayscount="+dayscount+"&dailycare"+dailycare+"&familychildrens="+familychildrens+"&becontacted="+becontacted+"&hospital="+hospital+"&allergic="+allergic+"&hospital2="+hospital2+"&extrainfo="+extrainfo);
    }


