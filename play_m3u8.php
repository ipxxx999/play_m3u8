<!DOCTYPE html>
<html>
<head>
<!--Este es un texto de ejemplo que no se mostrará en el navegador.-->
<!-- archivo hls.js@latest  --- https://cdn.jsdelivr.net/npm/hls.js@latest -->
<!-- referencia https://stackoverflow.com/questions/61657838/m3u8-video-source-only-running-on-macos -->


  <script src="hls.js@latest"></script>
  <style>
    LEFT OUT BECAUSE OF LINE LIMIT AT STACKOVERFLOW
  </style>
</head>

<body>
  <video id="video" style="width: 90%; height: 80%;" controls></video>
  <script>
    function playM3u8(url){
      if(Hls.isSupported()) {
        var video = document.getElementById('video');
        video.volume = 1.0;
        var hls = new Hls();
        var m3u8Url = decodeURIComponent(url)
        hls.loadSource(m3u8Url);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED,function() {
          video.play();
        });
      } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = url;
        video.addEventListener('loadedmetadata', function() {
          video.play();
        });
      }
    }
    playM3u8("historia.m3u8")
  </script>
</body>
</html>

<!--Este es un texto de ejemplo que no se mostrará en el navegador.-->

<!-- http://10.0.8.4/server/123456789.m3u8 -->

<!-- http://10.0.8.4/b/playlist-bla.m3u8 -->

<!-- http://cl.origin.grupoz.cl/uestv/live/playlist.m3u8 -->

<!-- http://10.0.8.4/server/playlist-bla.m3u8 -->

<!-- http://10.0.8.4/b/playlist-bla.m3u8 -->

<!-- http://10.0.8.4/b/playlist-bla.m3u8 -->

<!-- http://10.0.8.4/b/playlist-bla.m3u8 -->





