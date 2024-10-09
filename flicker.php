<?php (is_numeric($_REQUEST['period'])) ? $_REQUEST['period'] : 1000; ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<title>Flicker</title>
<link rel="shortcut icon" href="flicker.icon.png?rev=<?=time();?>" type="image/x-icon">
<style>
body {
  background-size: cover;
}
</style>
<script src="jquery.js?rev=<?=time();?>"></script>
<script>
$(document).ready(function() {
   setInterval(flick, <?=$_REQUEST['period'];?>);
});
function flick() {
  $.ajax({
    url: 'flick.php',
    success: function(data) {
       $('body').css('background-color', '#' + data);
     },
  });
}
</script>
</head>
<body name="flick">
</body>
</html>
