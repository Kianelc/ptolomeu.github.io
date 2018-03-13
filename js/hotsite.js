function myFunction() {
  document.getElementById("modal").style.display = "block";
  document.getElementById("container-1").style.display = "none";

}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    document.getElementById("video-ptolomeu").style.display = "none";
  }
}

function send(form) {
  //emailjs.sendForm('default_service', 'template_sKkrqfE9', this); return false;

  var strMessage1 = document.getElementById("sendForm") ;
  strMessage1.innerHTML = '<div> <h2>Muito obrigado!</h2> Por favor aguarde o convite para o beta. </div>';
  return false;
}
