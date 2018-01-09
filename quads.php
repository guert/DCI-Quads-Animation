<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>DCI QUADS</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="css/quads.css">

</head>

<body>
<div class="now-playing">Now Playing: Bloo Q 2012</div>
<div style="float:right;position:relative;z-index:2;">
<a href="#" id="red"><span class="color-box red-box"></span></a>
<a href="#" id="green"><span class="color-box green-box"></span></a>
<a href="#" id="blue"><span class="color-box blue-box"></span></a>
<a href="#" id="black"><span class="color-box black-box"></span></a>

</div>
<span class="quads-logo"></span>
  <div id="flipping-quads">
    <div class="box tenor1"></div>
    <div class="box tenor2"></div>
    <div class="box tenor3"></div>
    <div class="box tenor4"></div>
  </div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.11.5/TweenMax.min.js'></script>
  <script  src="js/quads.js"></script>
  <script  src="js/colors.js"></script>
  <div style="visibility:hidden;display:none;"><embed src="audio/blooq-12.mp3" autostart="true" loop="true" hidden="true"></div>  
</body>
</html>
