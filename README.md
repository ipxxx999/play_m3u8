 Ver 
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
