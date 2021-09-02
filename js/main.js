// other language inputfield 

function otherlanguage(that) {
    if (that.value == "other") {

        document.getElementById("ifYes").style.display = "block";
    } else {
        document.getElementById("ifYes").style.display = "none";
    }
}

// if have pets can name it in inputfield

function havepets(that) {
    if (that.value == "yes") {

        document.getElementById("yes").style.display = "block";
    } else {
        document.getElementById("yes").style.display = "none";
    }
}

// if have other guardian

function otherguardian(that) {
    if (that.value == "other") {

        document.getElementById("other").style.display = "block";
    } else {
        document.getElementById("other").style.display = "none";
    }
}