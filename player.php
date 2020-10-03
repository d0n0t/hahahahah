<title>PHOTOCALL.TV - Streaming</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="http://www.espai.jazztel.es/favicon2.ico" type="image/x-icon" />
<body style="margin:0">
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>var player = new Clappr.Player({
    source: <?php echo "<?php echo $_GET['vid'] ?>".base64_encode($data['vid']); ?>,
    parentId: '#player',
    mimeType: 'application/x-mpegURL',
    plugins: [DashShakaPlayback,LevelSelector,ChromecastPlugin],
    levelSelectorConfig: {
        title: 'Quality',
        labels: {
            2: 'High', // 500kbps
            1: 'Med', // 240kbps
            0: 'Low', // 120kbps
        },
        labelCallback: function(playbackLevel, customLabel) {
            return customLabel + playbackLevel.level.height+'p'; // High 720p
        }
    }
});
</script>
</script>
</body> 
