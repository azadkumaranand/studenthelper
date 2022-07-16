let play = document.getElementById('play');
play.addEventListener('click',showVideo);
let videoplayer = document.querySelector('.videoplayer');
let thumbnail = document.querySelector('.thumbnail');
let videocancel = document.getElementById('videocancel');
videocancel.addEventListener('click',function(){
    videoplayer.style.display = 'none';
    thumbnail.style.display = 'block';
    videocancel.style.display = 'none';
})
function showVideo(){
    videoplayer.style.display = 'block';
    thumbnail.style.display = 'none';
    videocancel.style.display = 'block';
}
