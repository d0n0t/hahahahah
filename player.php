<title>brr</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body style="margin:0">
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>var player = new Clappr.Player({
source: "<?php echo ['vid'] ?>",
plugins: [LevelSelector, ChromecastPlugin],
parentId: "#player",
height: "100%",
width: "100%",
autoPlay: true,
});

  function base64_url_encode($vid)

{

return strtr(base64_encode($vid), '+/=', '-_,');

}

base64_encode -Encodes data  with MIME base64
  
function base64_url_decode($vid)

{

return base64_decode(strtr($vid, '-_,', '+/='));

}

base64_decode -Decodes data encoded with MIME base64.
  </script>
</body>
