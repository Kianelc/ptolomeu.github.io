function myFunction() {
  document.getElementById("modal").style.display = "block";
}

window.onclick = function(event) {
  console.log(event);
  console.log(typeof event.target);
  if (event.target == modal) {
    console.log('aqui');
    modal.style.display = "none";
    pauseVideo();
  }
  else if(event.target == img){
    playVideo();
  }
}

function send(form) {
  var strMessage1 = document.getElementById("sendForm") ;
  strMessage1.innerHTML = '<div> <h2>Muito obrigado!</h2> Por favor aguarde o convite para o beta. </div>';
  return false;
}

var tag = document.createElement('script');
tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '360',
    width: '640',
    videoId: 'fkR2sqr1FAc',
    playerVars: { 'autoplay': 0, 'controls': 0 },
  });
}

function playVideo(){
  player.playVideo();
}

function pauseVideo() {
  player.pauseVideo();
}

/*http://jsfiddle.net/ZcMkt/*/
