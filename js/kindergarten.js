
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
    const phonenumber = document.forms['kinderGarten']['phonenumber'].value;
    const jobhours = document.forms['kinderGarten']['jobhours'].value;
    const email = document.forms['kinderGarten']['email'].value;

    const firstname3 = document.forms['kinderGarten']['firstname3'].value;
    const lastname3  = document.forms['kinderGarten']['lastname3'].value;
    const career2 = document.forms['kinderGarten']['career2'].value;
    const job2 = document.forms['kinderGarten']['job2'].value;
    const phonenumber2 = document.forms['kinderGarten']['phonenumber2'].value;
    const jobhours2 = document.forms['kinderGarten']['jobhours2'].value;
    const email2 = document.forms['kinderGarten']['email2'].value;

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

    const inputs = document.querySelectorAll('input');
    

    console.log("Form has been submitted!");


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
        ajax.send();
    }


