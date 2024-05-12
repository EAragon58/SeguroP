/*Validacion nombre de ususario en el registro
var nameInput = document.getElementById("name");
nameInput.addEventListener("input", function(event){
    var name = event.target.value;
    name = name.replace(/[^a-zA-Z\s]/g, "");
    event.target.value = name;
});

//Validacion de apellido paternos en el registro del usuario
var lastnameInput = document.getElementById("last-name");
lastnameInput.addEventListener("input", function(event){
    var lastname = event.target.value;
    lastname = lastname.replace(/[^a-zA-Z\s]/g, "");
    event.target.value = lastname;
});

//Validacion de numero telefonico en el regsitro del; ususario
var telInput = document.getElementById("tel");
telInput.addEventListener("input", function(event){
    var tel = event.target.value;
    tel = tel.replace(/[^0-9]/g,"")
    event.target.value = tel;
});*/

//Validacion para las mesas
var telInput = document.getElementById("table");
telInput.addEventListener("input", function(event){
    var tel = event.target.value;
    tel = tel.replace(/\D/g, '')
    event.target.value = tel;
});

//Validacion para las mesas de modificar
var telInput = document.getElementById("tableM");
telInput.addEventListener("input", function(event){
    var tel = event.target.value;
    tel = tel.replace(/\D/g, '')
    event.target.value = tel;
});

//Validacion para las sillas
var telInput = document.getElementById("chair");
telInput.addEventListener("input", function(event){
    var tel = event.target.value;
    tel = tel.replace(/\D/g, '')
    event.target.value = tel;
});
//Validacion para las sillas
var telInput = document.getElementById("mantel");
telInput.addEventListener("input", function(event){
    var tel = event.target.value;
    tel = tel.replace(/\D/g, '')
    event.target.value = tel;
});

//Validacion para las id_modificar
var telInput = document.getElementById("id_modificar");
telInput.addEventListener("input", function(event){
    var tel = event.target.value;
    tel = tel.replace(/\D/g, '')
    event.target.value = tel;
});