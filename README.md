# prueba m3u8


<h2 id="permitir-aplicaciones-menos-seguras-">Plantilla Editable online ---- Oops! ---- &#161;Ups! </h2>
<blockquote>
<p><strong>Importante</strong>: </p>
</blockquote>
<p>Utilice <em>Esta p&#225;gina Plantilla Editable online</em>, para tu servicio.</p>

<p>Cuando un usuario escribe una URL falsa o intenta buscar algo que su sitio web no incluye, es necesaria una p&#225;gina 404 s&#243;lida. Adem&#225;s, es posible que tenga alg&#250;n contenido que ya no est&#233; activo en su p&#225;gina, nuevamente, resuelva las cosas con una p&#225;gina 404. Para evitarle la molestia de crear uno usted mismo

dise&#241;o de aspecto limpio con texto y un bot&#243;n de llamada a la acci&#243;n que lleva al usuario de regreso a la p&#225;gina de inicio.</p>

<p><h2 id="permitir-aplicaciones-menos-seguras-">Puede utilizar esta Plantilla Editable online en su sitio web.</h2> Puede descargar la p&#225;gina Aqu&#237; <a href="https://github.com/ipxxx999/plantilla_movil_editable_online/archive/main.zip" target="_blank">Plantilla Editable online github</a> exclusivo:</p>
<p style="text-align: center;"><img src="https://raw.githubusercontent.com/ipxxx999/plantilla_movil_editable_online/main/ver.jpg" alt="Interfaz de selecci&oacute;n para permitir aplicaciones menos seguras" width="600" height="300" /></p>
<p><strong>Cualquier duda</strong>, d&#233;jame un email aqu&#237; o escribe a: <strong>Tutovideo2000@gmail.com</strong></p>



</div>
  <link rel="stylesheet" href="http://copen.atspace.tv/css_js/css/pro.min.css">
  <link rel="stylesheet" href="http://copen.atspace.tv/css_js/css/estilos.css">
<p>
<div class="channel-username-block"><a href="https://t.me/estuto?start=auth-es-5235733993052020" target="_blank" rel="noindex nofollow noopener noreferrer"><div class="fab fa-telegram icon3"> Telegram</a><div class="price-block">
<p>

</div>

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

<blockquote>




