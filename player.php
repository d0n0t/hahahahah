<?php
session_start();
$token = $_GET['vid'];
$prev= session_id();
if(isset($_SESSION['setToken']))
{
   unset($_SESSION['setToken']);
   $token = openssl_decrypt($token, "aes128", session_id());
  session_regenerate_id();
    $token = openssl_encrypt($token, "aes128", $prev.session_id());
}
else
{
    session_regenerate_id(true);
}
header("Location: access.php?id=".$prev."&vid=".$token);
?>

<title>Streaming</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://www.espai.jazztel.es/favicon2.ico" type="image/x-icon" />
<body style="margin:0">
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>var player = new Clappr.Player({
source: "<?php echo $token_encrypted; ?>",
   mimeType: "application/x-mpegURL",
plugins: [LevelSelector, ChromecastPlugin],
parentId: "#player",
height: "100%",
width: "100%",
autoPlay: true,
});
</script>
</body>
