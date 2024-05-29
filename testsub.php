<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Video Playlist with Different Quality Source Tags</title>
<style>
    /* CSS styles */
    #playlist {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    #playlist li {
        cursor: pointer;
    }
    #videoPlayer {
        width: 100%;
    }
</style>
</head>
<body>
    <video id="videoPlayer" controls>
        <!-- Add multiple source tags for different qualities -->
        <source src="" type="video/mp4" id="sourceLow">
        <source src="" type="video/mp4" id="sourceMedium">
        <source src="" type="video/mp4" id="sourceHigh">
        Your browser does not support the video tag.
    </video>
    <ul id="playlist">
        <li data-video-low="video1_low.mp4" data-video-medium="video1_medium.mp4" data-video-high="video1_high.mp4">Video 1</li>
        <li data-video-low="video2_low.mp4" data-video-medium="video2_medium.mp4" data-video-high="video2_high.mp4">Video 2</li>
        <li data-video-low="video3_low.mp4" data-video-medium="video3_medium.mp4" data-video-high="video3_high.mp4">Video 3</li>

    </ul>
<script>
    // JavaScript code
    const videoPlayer = document.getElementById('videoPlayer');
    const sourceLow = document.getElementById('sourceLow');
    const sourceMedium = document.getElementById('sourceMedium');
    const sourceHigh = document.getElementById('sourceHigh');
    const playlistItems = document.querySelectorAll('#playlist li');

    function playVideo(videoSrcLow, videoSrcMedium, videoSrcHigh) {
        sourceLow.src = videoSrcLow;
        sourceMedium.src = videoSrcMedium;
        sourceHigh.src = videoSrcHigh;
        videoPlayer.load(); 
        videoPlayer.play();
    }

    playlistItems.forEach(item => {
        item.addEventListener('click', function() {
            const videoSrcLow = this.getAttribute('data-video-low');
            const videoSrcMedium = this.getAttribute('data-video-medium');
            const videoSrcHigh = this.getAttribute('data-video-high');
            playVideo(videoSrcLow, videoSrcMedium, videoSrcHigh);
        });
    });
</script>
</body>
</html>
