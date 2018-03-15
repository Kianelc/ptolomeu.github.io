function myFunction() {
  document.getElementById("modal").style.display = "block";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
    pauseVideo();
  }else if(event.target == img){
    playVideo();
  }
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
    videoId: 'yI06tAzgNL0',
    playerVars: { 'autoplay': 0, 'controls': 0 },
  });
}

function playVideo(){
  player.playVideo();
}

function pauseVideo() {
  player.pauseVideo();
}
