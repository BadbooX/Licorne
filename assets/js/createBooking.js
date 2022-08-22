function fonctionCreateBooking(){
    $("form").on("submit",function(e){
        e.preventDefault();
    });
var nomReserv = document.getElementById('nomReserv').value;
var prenomReserv = document.getElementById('prenomReserv').value;
var telReserv = document.getElementById('telReserv').value;
var mailReserv = document.getElementById('mailReserv').value;
var horaireReserv = document.getElementById('horaireReserv').value;
var placeReserv = document.getElementById('placeReserv').value;
var choixReserv = document.getElementById('choixReserv').value;



$.post('createBooking.php', {
        nomReserv:nomReserv,
        prenomReserv:prenomReserv,
        telReserv:telReserv,
        mailReserv:mailReserv,
        horaireReserv:horaireReserv,
        placeReserv:placeReserv,
        choixReserv:choixReserv
}, 
function(data){
    //data = objet affiché dans le traitement php
    document.body.innerHTML = returnedData;
  /* window.location.href = String(returnedData); */
})};
