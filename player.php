<title>brr</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body style="margin:0">
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/ewwink/clappr-quality-selector-plugin@latest/quality-selector.js"></script>
<script src="https://cdn.jsdelivr.net/clappr.chromecast-plugin/latest/clappr-chromecast-plugin.js"></script>
<div id="player"></div>
<script>
  
  var player = new Clappr.Player({
  source: "<?php echo ['vid'] ?>",
  plugins: [QualitySelector],
  qualitySelectorConfig: {
    title: 'Quality',
    labels: {
      2: 'High', // 500kbps
      1: 'Med', // 240kbps
      0: 'Low', // 120kbps
    },
    defaultQuality: 0, // start with quality 0 or Lowest
    labelCallback: function(playbackLevel, customLabel) {
      return customLabel + playbackLevel.level.height + 'p'; // High 720p
    }
  },
  events: {
    onPlay: function() {
      setTimeout(function() {
        var levels = player.getPlaybackQuality();
        console.log(levels); // log the levels
        player.setPlaybackQuality(2); // Change to highest level
      }, 10000); // fired after 10 second playing
    }
  }
});
  </script>
</body>
