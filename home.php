<?php
session_start();
session_regenerate_id();
$_SSEION['setToken'] = true;
$token = "https://abp-i.akamaihd.net/hls/live/765531/abpmajha/master.m3u8";
$token_encrypted = openssl_encrypt($token, "aes128", session_id());

<title>Streaming</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://www.espai.jazztel.es/favicon2.ico" type="image/x-icon" />
<body style="margin:0">
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>var player = new Clappr.Player({
source: "video.php?vid=<?php echo $token_encrypted; ?>",
   mimeType: "application/x-mpegURL",
plugins: [LevelSelector, ChromecastPlugin],
parentId: "#player",
height: "100%",
width: "100%",
autoPlay: true,
});
</script>
 ?>