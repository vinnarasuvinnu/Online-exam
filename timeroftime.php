<!DOCTYPE html>
<html>
<head>
	<title></title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
var minutes = 1, seconds = 59;
  jQuery(function(){
    jQuery("span.countdown").html(minutes + ":" + seconds);

    var count = setInterval(function(){ 
    	if(parseInt(minutes) < 0)
    	 {
    	  clearInterval(count); 
    	}
    	 else {
    	 	jQuery("span.countdown").html(minutes + ":" + seconds); 
    	 	if(seconds == 0) {
    	 	 minutes--; 
    	 		if(minutes < 10) 
    	 			minutes = "0"+minutes; 
    	 		seconds = 59;
    	 	}
    	 		 seconds--; 
    	 		if(seconds < 10) 
    	 			minutes = "0"+seconds;}
    	 		 }, 1000);
  })
</script>
</head>
<body>
<span class="countdown"></span>

</body>
</html>