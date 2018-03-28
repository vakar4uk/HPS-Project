var busSelBtn = document.getElementById("selected-business-type");

function selectBusinessType() {
    // busSelBtn.classList.remove("btn-info");
    busSelBtn.classList.toggle("btn-info");
}

// get zipcode
var zipcodeField = document.getElementById("zipcodeField");
var zipcode = document.getElementById("zipcode").value;

zipcodeField.addEventListener("onclick", checkZipcode);

function checkZipcode() {
    console.log("SUP");
}