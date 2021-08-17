<!DOCTYPE html> 
<html> 
<body> 

<div style="text-align:center"> 
  <button onclick="playPause()">Play/Pause</button> 
  <button onclick="nextButton()">Next</button>
  <br> 
  <video id="video1" width="100%" height="400" controls autoplay>
  <source src="vid/Vanguard.mp4" type="video/mp4">
    <source  type="video/mp3">
     <source type="video/ogg">
    Your browser does not support HTML5 video.
  </video>
</div> 

<script> 
var myVideo=document.getElementById("video1"); 
var videoList=['TENET(2020).mkv','Vanguard.mp4','','',''];
var index = videoList.indexOf(window.currentVideoName);

//Next button
function nextButton(){
myVideo.pause();
myVideo.currentTime=0;
index = index + 1;
if(index==videoList.length)
index = 0;
alert(videoList[index]);
myVideo.src = 'vid/'+videoList[index];
window.currentVideoName=videoList[index];
myVideo.play();
}

//Previous button


function playPause()
{ 
if (myVideo.paused) 
  myVideo.play(); 
else 
  myVideo.pause(); 
} 

</script> 

</body> 
</html>