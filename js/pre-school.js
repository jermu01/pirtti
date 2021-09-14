
document.forms['preSchool'].addEventListener('submit', infoApplication);


function infoApplication(event){

    event.preventDefault();

    const firstname = document.forms['preSchool']['firstname'].value;
    const lastname  = document.forms['preSchool']['lastname'].value;
    const identity = document.forms['preSchool']['identity'].value;
    const address = document.forms['preSchool']['address'].value;

    const language = document.forms['preSchool']['language'].value;
    const pets = document.forms['preSchool']['pets'].value;

    const firstname2 = document.forms['preSchool']['firstname2'].value;
    const lastname2  = document.forms['preSchool']['lastname2'].value;
    const career = document.forms['preSchool']['career'].value;
    const job = document.forms['preSchool']['job'].value;
    const parentphonenumber = document.forms['preSchool']['parentphonenumber'].value;
    const jobhours = document.forms['preSchool']['jobhours'].value;
    const parentemail = document.forms['preSchool']['parentemail'].value;

    const firstname3 = document.forms['preSchool']['firstname3'].value;
    const lastname3  = document.forms['preSchool']['lastname3'].value;
    const career2 = document.forms['preSchool']['career2'].value;
    const job2 = document.forms['preSchool']['job2'].value;
    const parentphonenumber2 = document.forms['preSchool']['parentphonenumber2'].value;
    const jobhours2 = document.forms['preSchool']['jobhours2'].value;
    const parentemail2 = document.forms['preSchool']['parentemail2'].value;

    const relationship = document.forms['preSchool']['relationship'].value;
    
    const needcare = document.forms['preSchool']['needcare'].value;
    const transport = document.forms['preSchool']['transport'].value;
    const familychildrens = document.forms['preSchool']['familychildrens'].value;
    const becontacted = document.forms['preSchool']['becontacted'].value;
    const hospital = document.forms['preSchool']['hospital'].value;
    const allergic = document.forms['preSchool']['allergic'].value;
    const hospital2 = document.forms['preSchool']['hospital2'].value;
    const extrainfo = document.forms['preSchool']['extrainfo'].value;


        let ajax = new XMLHttpRequest();
        ajax.onload = function(){
            const data = JSON.parse(this.responseText);
            if (data.hasOwnProperty('success')) {
                window.location.href = "doneApplication.php?type=success&msg=Hakemuksesi on lähetetty!!";
            } else {
                showMessage('error');
            }
    
        }
    
        ajax.open("POST", "../backend/pre-schoolApplication.php", true);
        ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        ajax.send("firstname="+firstname+"&lastname="+lastname+"&identity="+identity+"&address="+address+"&language="+language+"&pets="+pets+"&firstname2="+firstname2+"&lastname2="+lastname2+"&career="+career+"&job="+job+"&parentphonenumber="+parentphonenumber+"&jobhours="+jobhours+"&parentemail="+parentemail+"&firstname3="+firstname3+"&lastname3="+lastname3+"&career2="+career2+"&job2="+job2+"&parentphonenumber2="+parentphonenumber2+"&jobhours2="+jobhours2+"&parentemail2="+parentemail2+"&relationship="+relationship+"&needcare="+needcare+"&transport="+transport+"&familychildrens="+familychildrens+"&becontacted="+becontacted+"&hospital="+hospital+"&allergic="+allergic+"&hospital2="+hospital2+"&extrainfo="+extrainfo);
    }

    function showMessage(type, msg){

        let msgBox = document.getElementById("msg");
    
        if (type== 'success') {
            msgBox.classList.remove('alert-danger');
            msgBox.classList.add('alert-success');
        } else if(type == 'error') {
            msgBox.classList.remove('alert-success');
            msgBox.classList.add('alert-danger');
        }
    
        msgBox.querySelector('p').innerHTML = msg;
        msgBox.classList.remove('d-none');
    }