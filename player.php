f (!empty($_GET['token'])) {
    switch ($_GET['token']) {
        case "1":
            header("Content-type: application/x-mpegURL");
            echo file_get_contents('<?php echo $_GET['vid'] ?>');
            break;
    }
    die();
}

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
source: "<?php echo $_GET['vid'] ?>",
mimeType: "application/x-mpegURL",
plugins: [LevelSelector, ChromecastPlugin],
parentId: "#player",
height: "100%",
width: "100%",
autoPlay: true,
});
</script>
</body>
