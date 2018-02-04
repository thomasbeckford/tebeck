<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<script>
		// initialize and setup facebook js sdk
		window.fbAsyncInit = function() {
		    FB.init({
		      appId      : '245126446025547',
		      xfbml      : true,
		      version    : 'v2.11'
		    });
		    FB.getLoginStatus(function(response) {
		    	if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.'
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
		    });
		};
		(function(d, s, id){
		    var js, fjs = d.getElementsByTagName(s)[0];
		    if (d.getElementById(id)) {return;}
		    js = d.createElement(s); js.id = id;
		    js.src = "//connect.facebook.net/en_US/sdk.js";
		    fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		// login with facebook with extened publish_actions permission
		function login() {
			FB.login(function(response) {
				if (response.status === 'connected') {
		    		document.getElementById('status').innerHTML = 'We are connected.';
		    		document.getElementById('login').style.visibility = 'hidden';
		    	} else if (response.status === 'not_authorized') {
		    		document.getElementById('status').innerHTML = 'We are not logged in.'
		    	} else {
		    		document.getElementById('status').innerHTML = 'You are not logged into Facebook.';
		    	}
			}, {scope: 'publish_actions'});
		}
		// getting basic user info
		function getInfo() {
			FB.api('/me', 'GET', {fields: 'likes'}, function(response) {
				document.getElementById('status').innerHTML = response.id;
			});
		}
		// uploading photo on user timeline
		function uploadPhoto() {
			FB.api('/me/photos', 'post', {source: 'https://scontent-mxp1-1.xx.fbcdn.net/hphotos-xta1/v/t1.0-9/12107039_1513771898920585_3618649571988879636_n.jpg?oh=cef4dad7d2e036aa8eb48f42d51e7406&oe=56D8EC6A'}, function(response) {
				if (!response || response.error) {
					document.getElementById('status').innerHTML = "Error!";
				} else {
					document.getElementById('status').innerHTML = response.id;
				}
			});
		}
	</script>

	<div id="status"></div>
	<button onclick="getInfo()" id="login">Soy fan ?</button>
	<button onclick="login()" id="login">Login</button>
</body>
</html>