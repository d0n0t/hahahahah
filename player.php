<html>
<head>
  <title>Clappr Player</title>
  <meta charset="UTF-8">
  <!-- Player -->
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/clappr/0.2.86/clappr.min.js"></script>
  <!-- Video resolution switcher -->
  <script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
</head>

<body style="margin:0"> 
  <div id="player"></div>
  <script>
    var player = new Clappr.Player({
      source: "<?php echo ['vid'] ?>",
      parentId: "#player",
      plugins: {
        core: [LevelSelector]
      },
      levelSelectorConfig: {
        //Optional : custom labels
        title: '動画品質',
        labels: {
          0: 'Very low',
          1: 'Low ',
          2: 'Medium ',
          3: 'HQ',
          4: 'High',
          5: 'Very high',
          6: 'Extremy high',
          7: 'Highest'
        },
      },
    });
  </script>
</body>
</html>
