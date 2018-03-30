// Select type of business
var individualBusBtn = document.getElementById("business-individual");
var groupBusBtn = document.getElementById("business-group");
var individualBusiness = document.getElementById("individual-business-display");
var groupBusiness = document.getElementById("group-business-display");

var exchangeTypeBtn = document.getElementsByClassName("exchange-type-btn");

var carrierCodeIndividual = document.getElementById("carrier-code-individual");
var carrierCodeGroup = document.getElementById("carrier-code-group");

var submitIndividual = document.getElementById("submit-individual");
var submitGroup = document.getElementById("submit-group");

var inputCodeIndividual = document.getElementById("input-code-individual");
var inputCodeGroup = document.getElementById("input-code-group");


individualBusBtn.addEventListener("click", function() {
    individualBusBtn.classList.toggle("btn-info");
    groupBusBtn.classList.add("btn-info");

    individualBusiness.style.display = "block";
    groupBusiness.style.display = "none";   

});

groupBusBtn.addEventListener("click", function() {
    groupBusBtn.classList.toggle("btn-info");
    individualBusBtn.classList.add("btn-info");

    groupBusiness.style.display = "block";
    individualBusiness.style.display = "none";
});

for (var i = 0; i < exchangeTypeBtn.length; i++) {
    exchangeTypeBtn[i].addEventListener("click", function() {
        carrierCodeIndividual.style.display = "block";
        carrierCodeGroup.style.display = "block";        
    });
}

inputCodeIndividual.addEventListener("keydown", function() {
    submitIndividual.style.display = "block";
});

inputCodeGroup.addEventListener("keydown", function() {
    submitGroup.style.display = "block";
});