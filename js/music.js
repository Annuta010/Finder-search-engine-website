let songs = document.querySelectorAll('.music-item');

for (let song of songs) {
    
    song.onclick = function() {
        for (song of songs) {
            song.classList.remove('active');
        }
        this.classList.add('active');
        for (song of songs) {
            let audio = song.querySelector('audio');
            let pauseIcon = song.querySelector('#pause');
            let playIcon = song.querySelector('#play');
            if (song.classList.contains('active')) {
                if (audio.paused) {
                    audio.play();
                    pauseIcon.classList.remove('hidden');
                    playIcon.classList.add('hidden');
        
                } else {
                    audio.pause();
                    pauseIcon.classList.add('hidden');
                    playIcon.classList.remove('hidden');
                }
            } 
            else {
                if (audio.played) {
                    audio.pause();
                }
            }
        }
    }
    
}


/* let playBtn = song.querySelector('button');
    let pauseIcon = playBtn.querySelector('#pause');
    let playIcon = playBtn.querySelector('#play');
    let audio = song.querySelector('audio');
    playBtn.onclick = function() {
        if (audio.paused) {
            audio.play();
            pauseIcon.classList.remove('hidden');
            playIcon.classList.add('hidden');

        } else {
            audio.pause();
            pauseIcon.classList.add('hidden');
            playIcon.classList.remove('hidden');
        }
    } */