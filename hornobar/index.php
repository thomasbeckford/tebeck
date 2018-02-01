<!DOCTYPE HTML>
<html>
<head>
	<title>Hornobar</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="expires" content="-1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
	<meta http-equiv="refresh" content="-1">
	<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
</head>

<body>

<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js">

</script>

<script>


	FB.init({
	appId :'245126446025547',
			status : true,
			cookie : true,
			xfbml : true,
	});

	FB.getLoginStatus(function(response) {
		if (response.status == "connected"){
			console.log("connected");
		FB.api('/me/likes/939390592790568', function(response) {
		    console.log(response.data);
		    if(response.data == ''){
		    }else{
		    	alert("Redirigiendo...")
		    	document.getElementById('redi').innerHTML = "REDIRIGIENDO....";
				 redirect();

		    }
		});

	}
});



(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.5&appId=245126446025547";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


function redirect(){

	top.window.location = "https://www.google.com.ar/search?ei=6MFsWpDKJ8L-wQS306TwBQ&q=hornobar&oq=hornobar&gs_l=psy-ab.3..0i67k1j0i10k1j0i67k1j0j0i10k1j0i10i203k1l2j0j0i30k1l2.1052.1761.0.1837.8.8.0.0.0.0.152.704.4j3.7.0....0...1c.1.64.psy-ab..1.7.702...35i39k1j0i131k1j0i131i67k1j0i203k1.0.07HhwIqi1EM#lrd=0x95bcb1c96860a617:0x78666d8ff55c8a1f,1";

}
</script>


<input type="hidden" name="actionlike" id="actionlike" value="<?php echo $actionlike; ?>" />
<input type="hidden" name="dst" id="dst" value="<?php echo $dst; ?>" />

<h3 class="box-like-h">Accede a WIFI dandonos un like en facebook!</h3><br>

<p id="redi"></p>

<div id="btn" class="fb-like" data-href="https://www.facebook.com/Hornobar-939390592790568" data-layout="standard" data-action="like" data-show-faces="false" data-share="false"></div>

<footer>

</footer>

</body>
</html>