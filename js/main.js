(() => {

const playPause = document.querySelector('.play-pause'),
      vidplayer = document.querySelector('video'),
      ffWd = document.querySelector('.ffBut'),
      rWd = document.querySelector('.rewindBut'),
      volUp = document.querySelector('.volumeUp'),
      volDown = document.querySelector('.volumeDown');

function togglePlay(){
    //debugger;
    var theSVG = this.firstElementChild;
    if(vidplayer.paused){
        vidplayer.play();
    }
    else {
        vidplayer.pause();
    }
}

function ffWdVid(){
    vidplayer.currentTime += 10;
}

function rWdVid(){
    vidplayer.currentTime -= 10;
}

function volUpVid(){
    vidplayer.volume += 0.1;
}

function volDownVid(){
    vidplayer.volume -= 0.1;
}




playPause.addEventListener('click', togglePlay);
ffWd.addEventListener('click', ffWdVid);
rWd.addEventListener('click', rWdVid);
volUp.addEventListener('click', volUpVid);
volDown.addEventListener('click', volDownVid);

})();