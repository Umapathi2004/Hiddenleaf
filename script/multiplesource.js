const videoPlayer = document.getElementById('videoPlayer');
    const sourceLow = document.getElementById('source480p');
    const sourceMedium = document.getElementById('source720p');
    const sourceHigh = document.getElementById('source1080p');
    const currentSences = document.getElementById('current-sences')
    const playlistItems = document.querySelectorAll('#playlist-s-e li');

    function playVideo(videoSrcLow, videoSrcMedium, videoSrcHigh,dataCurrent) {
        currentSences.innerHTML = dataCurrent;
        sourceLow.src = videoSrcLow;
        sourceMedium.src = videoSrcMedium;
        sourceHigh.src = videoSrcHigh;
        videoPlayer.load(); 
        videoPlayer.play();
    }

    playlistItems.forEach(item => {
        item.addEventListener('click', function() {
            const videoSrcLow = this.getAttribute('data-video-480p');
            const videoSrcMedium = this.getAttribute('data-video-720p');
            const videoSrcHigh = this.getAttribute('data-video-1080p');
            const dataCurrent = this.getAttribute('data-current');
            playVideo(videoSrcLow, videoSrcMedium, videoSrcHigh,dataCurrent);
        });
    });
 