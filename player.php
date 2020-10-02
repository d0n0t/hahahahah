<title>brr</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body style="margin:0">
  <<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.level-selector/latest/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>
  var player = new Clappr.Player({
source: "<?php echo ['vid'] ?>",
plugins: [LevelSelector, ChromecastPlugin],
parentId: "#player",
height: "100%",
width: "100%",
autoPlay: true,
});
</script>
</body>
</html>
